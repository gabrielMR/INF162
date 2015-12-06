<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registra;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class CambiarController extends Controller
{
    public function cambio($fe){
    	$datos = DB::select("select hour(h.hora)-hour(hi.hora) as h1,minute(h.hora)-minute(hi.hora) as h2,h.hora as h3,hi.hora as h4,p.nombre
from registra r,tiene t, hora h,horario hi,persona p
where r.id_e=t.id_ef and h.id_hor=r.id_hor and hi.id_hora=t.id_horaf and r.id_e=p.id and r.fecha_ac='".$fe."'");
        return view('vista')->with('datos',$datos);

    }
    public function cambio1($mes){
    	$datos = DB::select("select hour(h.hora)-hour(hi.hora) as h1,minute(h.hora)-minute(hi.hora) as h2,h.hora as h3,hi.hora as h4,p.nombre
from registra r,tiene t, hora h,horario hi,persona p
where r.id_e=t.id_ef and h.id_hor=r.id_hor and hi.id_hora=t.id_horaf and r.id_e=p.id and MONTH(r.fecha_ac)='".$mes."'");
        return view('vista2')->with('datos',$datos);
    }
}
