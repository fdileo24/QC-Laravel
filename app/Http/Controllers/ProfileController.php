<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    //
    public function index()
    {
        $user = DB::table('users')->where('id', Auth::user()->id)->first();
        return view('profile')->with('user',$user);;
    }
    
}
