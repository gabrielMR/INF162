<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Personal;
use App\Horario;
use App\Tiene;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class RegistrarController extends Controller
{
    public function getindex(){
        return view('reg');
    }
     public function postindex(Request $request){
        $id_cod=$request->input('id_cod');
        $hora=$request->input('hora');
        $id=DB::table("horario")->insertGetId(array(
			'hora'  => $hora));

        $ti= new Tiene();
        $ti->id_ef=$id;
        $ti->save();

		
		
        return response()->json(array('msg' =>"da"));
    }
}
