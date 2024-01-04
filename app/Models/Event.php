<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'judul',
        'gambar',
        'tanggal',
        'lokasi',
        'deskripsi'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
