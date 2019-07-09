<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;
use Illuminate\Support\Facades\DB;

class FaqsController extends Controller
{
    //
    public function index(){
        $preguntas = DB::table('faqs')->get();
        dd($preguntas);
        return view('Faqs')->with('preguntas',$preguntas);
    }
}
