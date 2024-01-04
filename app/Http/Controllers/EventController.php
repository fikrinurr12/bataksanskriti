<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('dashboard.index', [
            'datas' => Event::get(),
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
        $user = auth()->user();        
        
        $validateData = $request->validate([
            'lokasi' => 'required|min:5|max:500',
            'gambar' => 'required|file|image|max:10024',
            'tanggal' => 'required|min:5|max:1000',
            'deskripsi' => 'required|min:5|max:5000'
        ]);                

        if($request->file('gambar')){
            $validateData['gambar'] = $request->file('gambar')->store('assets/jadwal','public');
        }

        Event::create([
            'user_id' => $user->id,
            'gambar' => $validateData['gambar'],
            'tanggal' => $validateData['tanggal'],
            'lokasi' => $validateData['lokasi'],
            'deskripsi' => $validateData['deskripsi']
        ]);

        return redirect('/event')->with('success', 'Berhasil membuat modul !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
        return view('dashboard.index', [
            'data' => $event
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        //
        $user = auth()->user();
        if($request['gambar']){
            $validateData = $request->validate([
                'lokasi' => ['required','min:5','max:500'],
                'gambar' => ['required', 'file', 'image', 'max:10024'],
                'tanggal' => ['required','min:5','max:1000'],
                'deskripsi' => 'required|min:5|max:5000'   
            ]);

            if($request->file('gambar')){
                $validateData['gambar'] = $request->file('gambar')->store('assets/jadwal','public');
            }
    
            $event->update([
                'user_id' => $user->id,
                'lokasi' => $validateData['lokasi'],
                'gambar' => $validateData['gambar'],
                'tanggal' => $validateData['tanggal'],
                'deskripsi' => $validateData['deskripsi']
            ]);
        }
        else{
            $validateData = $request->validate([
                'lokasi' => ['required','min:5','max:500'],                
                'tanggal' => ['required','min:5','max:1000'],  
                'deskripsi' => ['required','min:5','max:5000']     
            ]);
    
            $event->update([
                'user_id' => $user->id,
                'lokasi' => $validateData['lokasi'],                
                'tanggal' => $validateData['tanggal'],
                'deskripsi' => $validateData['deskripsi']
            ]);
        }

        return redirect('/event')->with('success', 'Jadwal Berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //        
        Event::destroy($event->id);
        Storage::disk('local')->delete(['assets/jadwal/'.$event->gambar]);
        return redirect('/event')->with('success', 'Event Berhasil Dihapus !');
    }
}
