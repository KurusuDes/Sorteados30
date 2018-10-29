<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackController extends Controller
{
    public function contact(){
        return view('contact');
    }
	
    public function sugerencias(){
        return view('sugerencias');
    }
	
    public function registro(){
        return view('registro');
    }
}
