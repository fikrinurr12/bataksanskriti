<?php

namespace App\Models;

use App\Models\Kuis;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skor extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function kuis(){
        return $this->belongsTo(Kuis::class);
    }
}
