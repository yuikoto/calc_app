<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calcs extends Controller
{
    public function result($num1, $valiable, $num2)
    {
        if ($valiable == 'addition') {
            $answer = $num1 + $num2;
        } elseif ($valiable == 'subtraction') {
            $answer = $num1 - $num2;
        } elseif ($valiable == 'multiplication') {
            $answer = $num1 * $num2;
        } elseif ($valiable == 'division') {
            $answer = $num1 / $num2;
        }
        return view('message.calcs', ['answer' => $answer]);
    }
};
