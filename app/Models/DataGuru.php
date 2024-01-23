<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Users;
use App\Models\Absensi;

class DataGuru extends Model
{
    use HasFactory;

    protected $table = 'data_guru';

    public function users(): BelongsTo
    {
        return $this->belongsTo(Users::class);
    }

    public function absensi(): HasMany
    {
        return $this->hasMany(Absensi::class);
    }
}
