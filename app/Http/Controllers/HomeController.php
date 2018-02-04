<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getIndex(){ return view("home.index"); }
    public function getArchive(){ return view("home.archive"); }
    public function getContact(){ return view("home.contact"); }
    public function getJoin(){ return view("home.join"); }
    public function getLog(){ return view("home.log"); }

}
