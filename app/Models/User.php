<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Kuis;
use App\Models\Komentar;
use App\Models\Modul;
use App\Models\Event;
use App\Models\Skor;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_lengkap',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function modul(){
        return $this->hasMany(Modul::class);
    }

    public function komentar(){
        return $this->hasMany(Komentar::class);
    }

    public function kuis(){
        return $this->hasMany(Kuis::class);
    }

    public function event(){
        return $this->hasMany(Event::class);
    }

    public function skor(){
        return $this->hasMany(Skor::class);
    }
}
