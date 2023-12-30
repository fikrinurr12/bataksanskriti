<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        return view('index');
    }

    public function modul(){
        return view('modul.index');
    }

    public function content(){
        return view('modul.content');
    }

    public function jadwal(){
        return view('jadwal.index');
    }
}
