<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Gorelka extends Controller
{
    public function GetData()
    {

        $minutes = 180;

        // TODO: rename var as weakly data
        $boilerPower = [
            'dateStart' => '2017-11-27 00:00:00',
            'min' => '14.0',
            'duration' => 0,
            'rashod' => 0
        ];

        $alldata = DB::table('gorelkadata')->orderBy('datetime','desc')->limit($minutes)->get()->reverse();

        $suggested = [
            'min' => 999,
            'max' => -999
        ];

        // Режимы работы котла
        $regim = [
            [
                'name' => "Ожидание",
                'color' => "#4D5360",
                'value' => 0
            ],[
                'name' => "Рожиг",
                'color' => "#F7464A",
                'value' => 0
            ],[
                'name' => "Нагрев",
                'color' => "#FDB45C",
                'value' => 0
            ],[
                'name' => "Стоп",
                'color' => "#949FB1",
                'value' => 0
            ],[
                'name' => "Электрокотел",
                'color' => "#46BFBD",
                'value' => 0
            ],[
                'name' => "Дрова",
                'color' => "#AA4643",
                'value' => 0
            ],[
                'name' => "Ожид. Темпер.",
                'color' => "#80699B",
                'value' => 0
            ],[
                'name' => "Стоп по темпер.",
                'color' => "#80699B",
                'value' => 0
            ]
        ];

        $rashod = 0;

        foreach ($alldata as $dataRow) {
            // Skip value counting if there was an error
            if ($dataRow->error == '500') continue;

            // Format time
            $timeArray[] = substr($dataRow->datetime,11,5);

            // Scale factor
            if ($dataRow->val0 < $dataRow->val1 ) {
                $rowMin = $dataRow->val0;
                $rowMax = $dataRow->val1;
            } else {
                $rowMin = $dataRow->val1;
                $rowMax = $dataRow->val2;
            }
            if ($suggested['min'] > $rowMin) $suggested['min'] = $rowMin;
            if ($suggested['max'] < $rowMax) $suggested['max'] = $rowMax;

            // Work status
            $regim[$dataRow->val5]['value'] += 1;

            // Расчет суммарного расхода
            $rashod += round(( $dataRow->val3 / 600 ),2);
        }
        $suggested['max'] = intval($suggested['max']) + 1;
        foreach ($regim as $i => $value) {
            if ($value['value'] == 0) unset($regim[$i]);
        }

        // Рассчет суммарных показателей с начала недели
        $powerData = DB::table('gorelkadata')->select('val2','val3','error')->where('datetime','>',$boilerPower['dateStart'])->get();
        foreach ($powerData as $value) {
            // Skip value counting if there was an error
            if ($value->error == '500') continue;

            if ($value->val2 > $boilerPower['min']) {
                $boilerPower['duration'] += 1;
            }

            $boilerPower['rashod'] += $value->val3 / 600 ;
        }
        $boilerPower['rashod'] = round($boilerPower['rashod'],2);
        $boilerPower['duration'] = intval($boilerPower['duration']/60) . 'ч' . $boilerPower['duration']%60 . 'мин';

        return view('dashboard',compact(['alldata','timeArray','suggested','regim','minutes','rashod','boilerPower']));
    }
}
