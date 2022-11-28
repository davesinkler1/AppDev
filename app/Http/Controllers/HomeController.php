<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('user')){
            return view('home');

        }elseif(Auth::user()->hasRole('administrator')){
            return view('adminhome');
        }
    }

    public function addutility()
    {
        return view('addutility');
    }
}
