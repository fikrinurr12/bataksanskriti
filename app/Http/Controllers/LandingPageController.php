<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kuis;
use App\Models\Modul;
use App\Models\Komentar;

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
        $komentar = Komentar::where('id_modul', $id)->get();
        return view('modul.content',compact('data','sidebar','komentar'));
    }

    public function jadwal(){
        return view('jadwal.index');
    }

    public function content_jadwal(){
        return view('jadwal.content');
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

    public function hasil_kuis(Request $request){
        $modul = Modul::all();
        return view('kuis.result', compact('modul'));
    }

    public function komentar(Request $request){
        $validateData = $request->validate([
            'komentar' => 'required|min:5|max:50'
        ]);

        Komentar::create([
            'user_id' => auth()->user()->id,
            'id_modul' => $request->id_modul,
            'komentar' => $validateData['komentar']
        ]);

        return redirect()->route('isi_modul', $request->id_modul)->with('success', 'Berhasil Komentar!');
    }   

}
