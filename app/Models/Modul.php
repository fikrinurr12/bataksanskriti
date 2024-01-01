<?php

namespace App\Models;

use App\Models\User;
use App\Models\Kuis;

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

    public function user(){
        return $this->belongsTo(User::class);
    }
}
