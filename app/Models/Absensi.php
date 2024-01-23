<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JadwalAbsensi;
use App\Models\Users;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'absensi';

    public function jadwal_absensi(): BelongsTo
    {
        return $this->belongsTo(JadwalAbsensi::class);
    }
    
    public function users(): BelongsTo
    {
        return $this->belongsTo(Users::class);
    }
    
}
