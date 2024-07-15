<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function HomePage(){
        $num1=100;
        $num2=200;
        $sum=$num1+$num2;

        return view('home',['result'=>$sum]);
    }
}
