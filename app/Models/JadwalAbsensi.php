<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Absensi;
use App\Models\Users;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JadwalAbsensi extends Model
{
    use HasFactory;

    protected $table = 'jadwal_absensi';

    public function absensi(): HasOne
    {
        return $this->hasOne(Absensi::class);
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(Users::class);
    }
}
