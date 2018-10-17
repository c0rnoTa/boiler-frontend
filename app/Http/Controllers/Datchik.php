<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Datchik extends Controller
{
    /** Значения датчика температур с указанного времени
     * @param string $from Дата и время, с которой получать занчения
     * @return mixed Массив значений tempdata
     */
    public static function GetLastData ($from = null, $id = null) {

        if(is_null($from)) {
            // $from = date('Y-m-d 00:00:00');
            $from = 180;
        }

        //$tempData = DB::table('tempdata')->select('temp')->where('datetime','>',$from)->get();
        if(is_null($id)) {
            $tempData = DB::table('tempdata')->select('temp')->orderBy('datetime','desc')->limit($from)->get()->reverse();
        } else {
            $tempData = DB::table('tempdata')->select('temp')->where('id',$id)->orderBy('datetime','desc')->limit($from)->get()->reverse();
        }
        // Convert object to array
        //$tempData = json_decode(json_encode($tempData), true);

        return $tempData;
    }
}
