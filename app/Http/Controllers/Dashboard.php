<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(){
        $sensors = Sensor::getDevices();
        $sensorsData = [];
        foreach ($sensors as $sensor) {
            $id = $sensor->id;
            $data = Sensor::getData($id);
            $sensorsData[ $id ] = $data;
        }
        return ['data'=>$sensorsData,'second'=>'bb'];
    }
}
