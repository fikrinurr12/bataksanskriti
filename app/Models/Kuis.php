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
    protected $fillable = [
        'user_id',
        'id_modul',
        'soal',
        'opsi_a',
        'opsi_b',
        'opsi_c',
        'opsi_d',
        'jawaban'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function modul(){
        return $this->belongsTo(Modul::class, 'id');
    }

    public function skor(){
        return $this->hasMany(Skor::class);
    }
}
