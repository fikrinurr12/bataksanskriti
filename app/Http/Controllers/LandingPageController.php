<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kuis;
use App\Models\Modul;
use App\Models\Komentar;
use App\Models\Event;

class LandingPageController extends Controller
{
    public function index(){
        $data = Event::get();
        return view('index',compact('data'));
    }

    public function modul(){
        $data = modul::all();
        return view('modul.index',compact('data'));
    }

    public function content_modul($id){
        $data = modul::find($id);
        $sidebar = modul::all();
        $komentar = Komentar::where('modul_id', $id)->get();
        return view('modul.content',compact('data','sidebar','komentar'));
    }

    public function jadwal(){
        $data = Event::get();
        return view('jadwal.index',compact('data'));
    }

    public function content_jadwal($id){
        $data = Event::find($id);
        $sidebar = Event::get();
        return view('jadwal.content',compact('data','sidebar'));
    }
}
