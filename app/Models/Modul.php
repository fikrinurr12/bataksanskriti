<?php

namespace App\Models;

use App\Models\User;
use App\Models\Kuis;
use App\Models\Komentar;
use App\Models\Skor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nama_modul',
        'gambar',
        'deskripsi'
    ];

    public function kuis(){
        return $this->hasMany(Kuis::class);
    }

    public function komentar(){
        return $this->hasMany(Komentar::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function skor(){
        return $this->hasMany(Skor::class);
    }
}
