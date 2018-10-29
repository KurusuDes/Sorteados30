<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
	
    public function home(){		
         $data = DB::table('coupons as c')
					->join('coupons_images as ci', 'c.id', '=', 'ci.coupon_id')
					->select('c.id','c.title', 'c.datecoupon','c.titular','c.description','c.flag_activo','ci.image_name')
					->whereNull('c.deleted_at')
					->where('c.flag_activo',1)
					->where('c.showinhome',1)
					->where('ci.image_id',1)
                    ->orderBy('c.datecoupon', 'desc')
                    ->get();

        $nroData = count($data);
		
		$hoy = date("d/m/Y");
		$mesn = date("n");
		$ano = date("Y");

		$iniSem = Carbon::now()->startOfMonth()->weekOfYear;
		$finSem = Carbon::now()->endOfMonth()->weekOfYear;
		
		$cantSemanas = $finSem-$iniSem+1;

		$mesesN=array(1=>"Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio",
             "Agosto","Septiembre","Octubre","Noviembre","Diciembre");

		$mes = $mesesN[$mesn];

        return view('home',['ano'=>$ano,'mes'=>$mes,'mesn'=>$mesn,'hoy' => $hoy,'data' => $data, 'nroData'=>$nroData, 'cantSemanas'=>$cantSemanas]);
    }
}
