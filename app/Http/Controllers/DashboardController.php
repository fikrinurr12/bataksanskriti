<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modul;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('dashboard.index', [
            'data_modul' => null,
            'data_event' => null,
        ]);
    }
}
