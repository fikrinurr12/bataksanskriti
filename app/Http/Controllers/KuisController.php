<?php

namespace App\Http\Controllers;

use App\Models\Kuis;
use App\Models\Modul;
use Illuminate\Http\Request;

class KuisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('dashboard.index', [
            'data' => null,
            'datas' => Modul::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kuis $kuis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kuis $kuis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kuis $kuis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kuis $kuis)
    {
        //
    }
}
