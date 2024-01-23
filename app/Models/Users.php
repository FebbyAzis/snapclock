<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;
use App\Models\JadwalAbsensi;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users';

    public function absensi(): HasMany
    {
        return $this->hasMany(Absensi::class);
    }

    public function jadwal_absensi(): HasMany
    {
        return $this->hasMany(JadwalAbsensi::class);
    }
    
    
}
