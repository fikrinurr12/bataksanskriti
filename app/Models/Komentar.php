<?php

namespace App\Models;

use App\Models\User;
use App\Models\Modul;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Komentar extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'id_modul',
        'komentar',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function modul(){
        return $this->belongsTo(Modul::class);
    }
}
