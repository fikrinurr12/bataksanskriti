<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modul;

class LandingPageController extends Controller
{
    public function index(){
        return view('index');
    }

    public function modul(){
        $data = modul::all();
        return view('modul.index',compact('data'));
    }

    public function content_modul($id){
        $data = modul::find($id);
        $sidebar = modul::all();
        return view('modul.content',compact('data','sidebar'));
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
