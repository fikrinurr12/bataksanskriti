<?php

namespace App\Http\Controllers;

use App\Models\Kuis;
use App\Models\Modul;
use Illuminate\Http\Request;

class KuisController extends Controller
{
    //
    public function index(){
        return view('dashboard.index', [
            'data_modul' => null,
            'data_event' => null,
            'datas' => Modul::get()
        ]);
    }

    public function create(Modul $modul){        
        return view('dashboard.index', [
            'data' => $modul,
            'data_modul' => null,
            'data_event' => null,
        ]);
    }

    public function store(Request $request){
        $id = $request->modul_id;
        $validateData = $request->validate([            
            'soal' => 'required|min:5|max:100',
            'opsi_a' => 'required|min:1|max:100',            
            'opsi_b' => 'required|min:1|max:100',            
            'opsi_c' => 'required|min:1|max:100',            
            'opsi_d' => 'required|min:1|max:100',
            'jawaban' => 'required|min:1|max:100'
        ]);    

        kuis::create([
            'user_id' => auth()->user()->id,
            'modul_id' => $id,
            'soal' => $validateData['soal'],
            'opsi_a' => $validateData['opsi_a'],            
            'opsi_b' => $validateData['opsi_b'],            
            'opsi_c' => $validateData['opsi_c'],            
            'opsi_d' => $validateData['opsi_d'],
            'jawaban' => $validateData['jawaban']
        ]);

        return redirect('/kuis/create/'.$id)->with('success', 'Kuis berhasil ditambahkan !');
    }

    public function edit(Kuis $kuis){        
        return view('dashboard.index', [
            'data_modul' => null,
            'data_event' => null,
            'data_kuis' => $kuis
        ]);
    }

    public function update(Request $request, Kuis $kuis){
        $validateData = $request->validate([            
            'soal' => 'required|min:5|max:100',
            'opsi_a' => 'required|min:1|max:100',            
            'opsi_b' => 'required|min:1|max:100',            
            'opsi_c' => 'required|min:1|max:100',            
            'opsi_d' => 'required|min:1|max:100',
            'jawaban' => 'required|min:1|max:100'
        ]);

        $kuis->update([
            'soal' => $validateData['soal'],
            'opsi_a' => $validateData['opsi_a'],            
            'opsi_b' => $validateData['opsi_b'],            
            'opsi_c' => $validateData['opsi_c'],            
            'opsi_d' => $validateData['opsi_d'],
            'jawaban' => $validateData['jawaban']
        ]);

        return redirect('/kuis/lists/'.$kuis->modul_id)->with('success', 'Kuis Telah Diperbarui');
    }

    public function destroy(Kuis $kuis){
        Kuis::destroy($kuis->id);
        return redirect('/kuis/lists/'.$kuis->modul_id);
    }
}
