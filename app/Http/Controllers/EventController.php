<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
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
            'data_modul' => null,
            'data_event' => null,
            'datas' => Event::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.index', [
            'data_modul' => null,
            'data_event' => null
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //        
        $id = auth()->user()->id;
        $validateData = $request->validate([
            'gambar' => 'required|file|image|max:10024',
            'tanggal' => 'required|date',
            'lokasi' => 'required|min:5',
            'deskripsi' => 'required|min:5'
        ]);

        if($request->file('gambar')){
            $validateData['gambar'] = $request->file('gambar')->store('assets/event','public');
        }

        Event::create([
            'user_id' => $id,
            'gambar' => $validateData['gambar'],
            'tanggal' => $validateData['tanggal'],
            'lokasi' => $validateData['lokasi'],
            'deskripsi' => $validateData['deskripsi']
        ]);

        return redirect('/event')->with('success', 'Event berhasil ditambahkan !');
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
            'data_modul' => null,
            'data_event' => $event
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        //
        if($request['gambar']){
            $validateData = $request->validate([
                'gambar' => 'required|file|image|max:10024',
                'tanggal' => 'required|date',
                'lokasi' => 'required|min:5',
                'deskripsi' => 'required|min:5'     
            ]);

            if($request->file('gambar')){
                $validateData['gambar'] = $request->file('gambar')->store('assets/modul','public');
            }
    
            $event->update([                
                'gambar' => $validateData['gambar'],
                'tanggal' => $validateData['tanggal'],
                'lokasi' => $validateData['lokasi'],
                'deskripsi' => $validateData['deskripsi']
            ]);
        }
        else{
            $validateData = $request->validate([              
                'tanggal' => 'required|date',
                'lokasi' => 'required|min:5',
                'deskripsi' => 'required|min:5'     
            ]);
    
            $event->update([                              
                'tanggal' => $validateData['tanggal'],
                'lokasi' => $validateData['lokasi'],
                'deskripsi' => $validateData['deskripsi']
            ]);
        }

        return redirect('/event')->with('success', 'Event Berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
        Event::destroy($event->id);
        Storage::disk('local')->delete(['assets/event/'.$event->gambar]);
        return redirect('/event')->with('success', 'Modul Berhasil Dihapus !');
    }
}
