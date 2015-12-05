<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmpleadoController extends Controller
{
    public function getIndex(){
        $head=view('head');
        $slide=view('slide');
        $content=view('content');
        $footer=view('footer');
        return view('empleado')->with('head',$head)->with('slide',$slide)->with('content',$content)->with('footer',$footer);
    }
}
