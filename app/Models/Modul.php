<?php

namespace App\Models;

use App\Models\User;
use App\Models\Kuis;
use App\Models\Komentar;

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
        return $this->hasMany(Kuis::class, 'id_modul');
    }

    public function komentar(){
        return $this->hasMany(Komentar::class, 'id_modul');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
