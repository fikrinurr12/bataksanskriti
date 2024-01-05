<?php

namespace App\Http\Controllers;

use App\Models\Kuis;
use App\Models\Skor;
use App\Models\Event;
use App\Models\Modul;
use App\Models\Komentar;
use Illuminate\Http\Request;

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

    public function kuis(){
        $modul = Modul::all();
        return view('kuis.index', compact('modul'));
    }

    public function content_kuis(Modul $id){
        $modul = $id;
        $kuis = $id->kuis;
        return view('kuis.content', compact('kuis','modul'));
    }

    public function hasil_kuis(Request $request, Modul $modul){
        $hasil = 0;
        $user_id = auth()->user()->id;                   
        $kuis = $modul->kuis;       
        $moduls = Modul::all();
        foreach($kuis as $array => $k){                        
            $index = $array+1;
            if($request['answer'.$index] == $k->jawaban){
                $nilai = 100/count($kuis);
                $hasil+=$nilai;
            }
        }

        Skor::create([
            'user_id' => $user_id,
            'modul_id' => $modul->id,
            'poin' => $hasil
        ]);

        return view('kuis.result', compact('moduls', 'hasil'));
    }

    public function komentar(Request $request){
        $validateData = $request->validate([
            'komentar' => 'required|min:5'
        ]);

        Komentar::create([
            'user_id' => auth()->user()->id,
            'modul_id' => $request->modul_id,
            'komentar' => $validateData['komentar']
        ]);

        return redirect()->route('isi_modul', $request->modul_id)->with('success', 'Berhasil Komentar!');
    }   

}
