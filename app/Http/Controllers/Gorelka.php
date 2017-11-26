<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Gorelka extends Controller
{
    public function GetData()
    {
        $alldata = DB::table('gorelkadata')->orderBy('datetime','desc')->limit(60)->get()->reverse();
        $suggested = [
            'min' => 999,
            'max' => -999
        ];
        foreach ($alldata as $dataRow) {
            $timeArray[] = substr($dataRow->datetime,11,5);
            if ($dataRow->val0 < $dataRow->val1 ) {
                $rowMin = $dataRow->val0;
                $rowMax = $dataRow->val1;
            } else {
                $rowMin = $dataRow->val1;
                $rowMax = $dataRow->val2;
            }
            if ($suggested['min'] > $rowMin) $suggested['min'] = $rowMin;
            if ($suggested['max'] < $rowMax) $suggested['max'] = $rowMax;
        }
        $suggested['max'] = intval($suggested['max']) + 1;

        return view('dashboard',compact(['alldata','timeArray','suggested']));
    }
}
