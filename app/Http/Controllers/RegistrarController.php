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
        $per=Personal::where('id',$id_cod)->first();
        if ($per) {
        $id=DB::table("horario")->insertGetId(array(
            'hora'  => $hora));
        DB::table("tiene")->insertGetId(array(
            'id_ef'  => $id_cod,
            'id_horaf'=>$id));
        return response()->json(array('msg' =>"<h1>".$per->nombre." Registrado exitosamente</h1>"));
       }else{
        return response()->json(array('msg' =>"<h1>No existe el codigo ".$id_cod."</h1>"));
       }
    }
}
