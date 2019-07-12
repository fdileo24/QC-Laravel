<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Auth;

class GameController extends Controller
{
    //
    public function index()
    {
        $preguntas = DB::select('select * from gamequestions');
        $puntos= DB::table('users')->select('puntos')->where('email','=',Auth::user()->email)->get();
        $CantPreguntas=count($preguntas)-1;     
        $indice=random_int(0,$CantPreguntas);
        $pregunta=$preguntas[$indice];
        $puntos=$puntos->toArray();
        Session::put('pregunta',$pregunta);
        Session::put('puntos',$puntos[0]->puntos);
        Session::put('Cpreguntas',$CantPreguntas);
        Session::put('preguntas',$preguntas);
        return view('game')->with('pregunta',$pregunta);
    }
    public function NextQuestion(Request $request)
    {
        $preguntaAnterior=Session::get('pregunta');
        $preguntas = DB::table('gamequestions')-> where ('id', '=', $preguntaAnterior->id)->get();
        $preguntas= $preguntas->toArray();
        if($preguntas[0]->correct_answer==$request->get("answer")){
            $puntos=Session::get('puntos')+1;
            Session::put('puntos',$puntos);
            DB::table('users')
            ->where('email','=',Auth::user()->email)
            ->update(['puntos' => $puntos]);
        }     
        $indice=random_int(0,Session::get('Cpreguntas'));
        $preguntas=Session::get('preguntas');
        $pregunta=$preguntas[$indice];
        Session::put('pregunta',$pregunta);
        return view("nextquestion")->with('pregunta',$pregunta);
    }
}
