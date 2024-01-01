<?php

namespace App\Models;

use App\Models\User;
use App\Models\Modul;
use App\Models\Skor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuis extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function modul(){
        return $this->belongsTo(Modul::class);
    }

    public function skor(){
        return $this->hasMany(Skor::class);
    }
}
