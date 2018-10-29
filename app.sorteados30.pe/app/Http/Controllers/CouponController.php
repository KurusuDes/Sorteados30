<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;

use App\User;
use App\Coupon;
use App\Couponimage;
use App\Couponsparticipants;
use App\Couponssorteo;
use App\Ticketshistory;

class CouponController extends Controller
{
    public function home(){
		
		$hoy = date("d/m/Y");
		$mesn = date("n");
		$mes = $this->getMonthName($mesn);

        return view('home',['mes'=>$mes,'mesn'=>$mesn,'hoy' => $hoy]);
    }

    public function couponbyweek($ano,$mes,$semana){
		
		$diaini = (7*($semana-1)) + 1;
		$week_start = Carbon::createFromFormat('Y-n-d', $ano.'-'.$mes.'-'.$diaini);
		$week_end = Carbon::createFromFormat('Y-n-d', $ano.'-'.$mes.'-'.$diaini);

		$day = $week_start->dayOfWeek;

		$week_start->addDays('-'.$day);
		$week_end->addDays(6-$day);

		while (strtotime($week_start) <= strtotime($week_end)) {
			if($week_start->format('n')==$mes){
				$dias[] = $week_start->format('j');
			}
			$week_start->addDay();
		}
		$mesN = $this->getMonthName($mes);
    	return view('semana',['semana'=>$semana,'dias'=>$dias,'mesN'=>$mesN,'ano'=>$ano,'mes'=>$mes]);
    }
	
	function getMonthName($mes){
		$mesesN=array(1=>"Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio",
             "Agosto","Septiembre","Octubre","Noviembre","Diciembre");
		return $mesesN[$mes];
	}
	
    public function coupons($ano,$mes,$dia){

         $data = DB::table('coupons as c')
					->join('coupons_images as ci', 'c.id', '=', 'ci.coupon_id')
					->select('c.id','c.title', 'c.datecoupon','c.titular','c.description','c.flag_activo','ci.image_name')
					->whereNull('c.deleted_at')
					->where('c.flag_activo',1)
					->where('c.datecoupon',$ano.'-'.$mes.'-'.$dia)
					->where('ci.image_id',1)
                    ->orderBy('c.datecoupon', 'desc')
                    ->get();

		$mesN = $this->getMonthName($mes);
                    
        return view('cupones',['data' => $data, 'mesN'=>strtoupper($mesN), 'ano'=>$ano, 'mes'=>$mes, 'dia'=>$dia]);
    }
	
    public function coupon($id){
		
		$cupon = Coupon::find($id);
		$ano = substr($cupon->datecoupon,0,4);
		$mes = intval(substr($cupon->datecoupon,5,2));
		$dia = intval(substr($cupon->datecoupon,8));

		 $data = DB::table('coupons_images')
					->select('image_id','image_name')
					->where('coupon_id',$id)
					->orderBy('image_id')
					->get();		

		$mesN = $this->getMonthName($mes);
                    
        return view('cupon',['cupon' => $cupon, 'data' => $data, 'mesN'=>$mesN, 'ano'=>$ano, 'mes'=>$mes, 'dia'=>$dia]);
    }
	
	public function participar(Request $request){
		
		$cuponid = $request->couponId;
		$opciones = $request->cboOpciones;		
		$userid = Auth::id();
		
		$user = new User;
		
		if($this->opcionesDisponibles($userid)>=$opciones){
			
			$couponsparticipants = new Couponsparticipants;
			$couponSorteo = new Couponssorteo;
			$ticketshistory = new Ticketshistory;
			
			$usuario = $user::where('id', $userid)->first();
			
			$dataCouponsparticipants["coupon_id"] = $cuponid;
			$dataCouponsparticipants["user_id"] = $userid;
			$dataCouponsparticipants["number_options"] = $opciones;
			
			$couponsparticipantsResult = $couponsparticipants->create($dataCouponsparticipants);
			
			$dataCouponSorteo["coupon_participant_id"] = $couponsparticipantsResult->id;
			$dataCouponSorteo["coupon_id"] = $cuponid;
			$dataCouponSorteo["user_id"] = $userid;	
			$dataCouponSorteo["documentnumber"] = $usuario->docnumber;
			$dataCouponSorteo["name"] = $usuario->name.' '.$usuario->lastname;
			
			for($i = 1; $i <= $opciones; $i++){
				$dataCouponSorteo["optionnumber"] = $i;
				$couponsSorteoResult = $couponSorteo->create($dataCouponSorteo);
			}
			
			$dataTicketsHistory["user_id"] = $userid;
			$dataTicketsHistory["movementtype_id"] = 3;
			$dataTicketsHistory["movement_id"] = $couponsparticipantsResult->id;
			$dataTicketsHistory["qty"] = $opciones*-1;
			$dataTicketsHistory["observations"] = "";
			
			$ticketshistoryResult = $ticketshistory->create($dataTicketsHistory);

			return back()->with('success', 'Se han agregado '.$opciones.' opción(es) al sorteo, gracias por participar y ¡mucha suerte!.');
			
		}else{
			return back()->withErrors(['No tiene puntos disponibles para poder participar.']);
		}
		
	}

    public function opcionesDisponibles($idUser){
		$puntos= 0;
		$data = DB::table('tickets_history')
				->select('user_id', DB::raw('SUM(qty) as total'))
				->where([['user_id',$idUser]])
				->groupBy('user_id')
				->first();
		if(!is_null($data)){
			$puntos = $data->total;
		}
		
		return $puntos;
    }
	
}
