<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Gorelka extends Controller
{
    public function GetData()
    {
        $alldata = DB::table('gorelkadata')->orderBy('datetime','desc')->limit(60)->get();

        return view('dashboard',compact(['alldata']));
    }
}
