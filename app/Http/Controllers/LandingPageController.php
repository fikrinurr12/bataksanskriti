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

    public function content_modul(){
        return view('modul.content');
    }

    public function jadwal(){
        return view('jadwal.index');
    }

    public function content_jadwal(){
        return view('jadwal.content');
    }

    public function kuis(){
        return view('kuis.index');
    }

    public function content_kuis(){
        return view('kuis.content');
    }

    public function hasil_kuis(){
        return view('kuis.result');
    }
}
