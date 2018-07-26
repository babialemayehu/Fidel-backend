<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
     protected function today(){
        $d = (int)date('d');
        $m = (int)date('m')-1;
        $y = '20'.(int)date('y');
        $date = ['day'=>$d,'month'=>$m,'year'=>$y];
        return json_encode((object)$date);
    }
    public function content(){
        return view('layouts.content')->with('today',$this->today());
    }
}
