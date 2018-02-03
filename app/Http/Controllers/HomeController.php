<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getIndex(){ return view("home.index"); }
    public function getSign(){ return view("home.sign"); }
    public function getLog(){ return view("home.log"); }
}
