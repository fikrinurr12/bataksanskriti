<?php

namespace App\Http\Controllers;

use App\Models\Modul;
use Illuminate\Http\Request;

class KuisListsController extends Controller
{
    //
    public function index(Modul $id){
        return view('dashboard.index', [
            'kuis_list' => $id->kuis,
            'data_modul' => null,
            'data_event' => null
        ]);
    }
}
