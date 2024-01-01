<?php

namespace App\Models;

use App\Models\User;
use App\Models\Kuis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    use HasFactory;
    public function kuis(){
        return $this->hasMany(Kuis::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
