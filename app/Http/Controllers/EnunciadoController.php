<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Codigo;
use App\Enunciado;
use App\Run;
class EnunciadoController extends Controller
{
    public function index()
    {
        return view("template.enunciado");
    }
    public function postindex(Request $request,$id){
        $id_cod=$request->input('id_cod');

        $run=new Run;
        $run->id_codf=$id_cod;
        $run->save();
        $run=Run::where('id_codf',$id_cod)->first();
        $resp=$run->res;
        if ($resp) {
            return response()->json(array('msg' =>$resp));
        }
        
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $enun=Enunciado::where('id_enu',$id)->first();;
        $id_codi=$enun->id_codf;
        $id_difi=$enun->id_diff;
        $en=$enun->descripcion;

        $codig=Codigo::where('id_cod',$id_codi)->first();
        $cod=$codig->codigo;

        return view("arena")->with('enu',$en)->with('cod',$cod)->with('idcod',$id_codi);   
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
