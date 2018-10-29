<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Ticketshistory;

class TicketController extends Controller
{
    public function ticketsbyuser(){
		$idUser = Auth::id();
		$puntos= 0;
		$data = DB::table('tickets_history')
				->select('user_id', DB::raw('SUM(qty) as total'))
				->where([['user_id',$idUser]])
				->groupBy('user_id')
				->first();
		if(!is_null($data)){
			$puntos = $data->total;
		}
		
		return view('tickets_user',['puntos'=>$puntos]);
    }
}
