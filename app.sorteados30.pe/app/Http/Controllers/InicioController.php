<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

//use ePrescribe\Appointment;



class InicioController extends Controller
{

    public function index(Request $request)
    {
        $idUser = Auth::id();
        return view('auth/login');
    }

    //2017_01_15 Busqueda de medico por codigo
    public function searchByCod(Request $request)
    {
        $term = $request->term; //jquery
        $busq = explode(" ", $term);

        $data = DB::table('doctors')->distinct();
        $data = $data->select('code as id',DB::raw("CONCAT(code,': ', lastnamefather,' ',lastnamemother,' ',firstname) as 'value'"));
   
        for ($i = 0; $i < count($busq); $i++) {
            $data = $data->where('code', 'LIKE', '%'.$busq[$i].'%');
        }

        
        //$data = $data->where([['flagcomercial', 1], ['flagactive', 1]]);
        $data = $data->groupBy('code','lastnamefather','lastnamemother','firstname')->take(10)->get();

        return json_encode($data);
    }

    public function getConfiguration($code="")
    {
        $data = $this->patients->getConfiguration($code);
        return $data;
    }

}
