<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloController extends Controller
{
    //
    public function index($name1)
    {
        echo "<h1>Greetings ".$name1."! Have a good day!</h1>";
    }
    public function index2($name1,$name2)
    {
        echo "Good job".$name1." and ".$name2."!";
    }
    public function add(Request $request)
    {
$sum= $request->number1+$request->number2;
return view('ans',['result'=>$sum]);
    }
}
