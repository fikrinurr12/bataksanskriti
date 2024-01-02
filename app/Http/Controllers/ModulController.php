<?php

namespace App\Http\Controllers;

use App\Models\Modul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ModulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('dashboard.index', [
            'datas' => Modul::get(),
            'data' => null
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.index', [
            'data' => null
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $user = auth()->user();        
        
        $validateData = $request->validate([
            'nama_modul' => 'required|min:5|max:50',
            'gambar' => 'required|file|image|max:10024',
            'deskripsi' => 'required|min:10|max:255'
        ]);                

        if($request->file('gambar')){
            $validateData['gambar'] = $request->file('gambar')->store('modul');
        }

        Modul::create([
            'user_id' => $user->id,
            'nama_modul' => $validateData['nama_modul'],
            'gambar' => $validateData['gambar'],
            'deskripsi' => $validateData['deskripsi']
        ]);

        return redirect('/modul')->with('success', 'Berhasil membuat modul !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Modul $modul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Modul $modul)
    {
        //
        return view('dashboard.index', [
            'data' => $modul
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Modul $modul)
    {
        //
        if($request['gambar']){
            $validateData = $request->validate([
                'nama_modul' => ['required','min:5','max:50'],
                'gambar' => ['required', 'file', 'image', 'max:10024'],
                'deskripsi' => ['required','min:10','max:255'],     
            ]);
    
            $modul->update([
                'nama_modul' => $validateData['nama_modul'],
                'gambar' => $validateData['gambar'],
                'deskripsi' => $validateData['deskripsi']
            ]);
        }
        else{
            $validateData = $request->validate([
                'nama_modul' => ['required','min:5','max:50'],                
                'deskripsi' => ['required','min:10','max:255'],     
            ]);
    
            $modul->update([
                'nama_modul' => $validateData['nama_modul'],                
                'deskripsi' => $validateData['deskripsi']
            ]);
        }

        return redirect('/modul')->with('success', 'Modul Berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modul $modul)
    {
        //        
        Modul::destroy($modul->id);
        Storage::disk('local')->delete(['public/'.$modul->gambar]);
        return redirect('/modul')->with('success', 'Modul Berhasil Dihapus !');
    }
}
