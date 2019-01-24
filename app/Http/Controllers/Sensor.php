<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Sensor extends Controller
{
    public static function getDevices() {
        return DB::table('sensors')->orderBy('lastread','desc')->get()->toArray();
    }

    public static function getData($device = null, $fromDate = null) {
        return DB::table('tempdata')->select('datetime','temp')->where('id',$device)->orderBy('datetime','desc')->limit(10)->get()->reverse()->toArray();
    }
}
