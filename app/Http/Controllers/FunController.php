<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FunController extends Controller
{
    public function personal()
    {
        return view("Rate.rating");
    }

    public function fun()
    {
        return view('fun.fun');
    }
}