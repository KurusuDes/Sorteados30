<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\User;

class UserController extends Controller
{
    public function account(){
		$idUser = Auth::id();
		$data = User::where('id', $idUser)->first();
		
		return view('account',['data'=>$data]);
    }
}
