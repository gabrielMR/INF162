<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
class EmpleadoController extends Controller
{
    public function getIndex(){
    	if (Auth::check()) {
        	$head=view('head');
        	$persona=Auth::user();

        	$slide=view('slide')->with('nombre',$persona->nombre);
        	$content=view('content');
        	$footer=view('footer');
        	return view('empleado')->with('head',$head)->with('slide',$slide)->with('content',$content)->with('footer',$footer);
    	}else{
    		return redirect('/');
    	}
    }
}
