<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function HomePage(){
        $num1=50;
        $num2=20;
        $sum=$num1+$num2;

        return view('home',['marks'=>$sum]);
    }
}
