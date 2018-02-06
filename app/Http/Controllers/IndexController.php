<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function getIndex(){ return view("index.index"); }
    public function getArchive(){ return view("index.archive"); }
    public function getContact(){ return view("index.contact"); }

}
