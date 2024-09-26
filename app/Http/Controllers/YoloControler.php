<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YoloControler extends Controller
{
    public function publicView (Request $request){
        return view('publicView');
    }

    public function privateView (Request $request){
        return view('privateView');
    }
}
