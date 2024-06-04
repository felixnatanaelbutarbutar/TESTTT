<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KepalaKeluarga extends Model
{
    use HasFactory;

    protected $fillable = [
        'lingkungan_id', 'namakeluarga', 'alamat', 'peleantaon',
    ];

    public function lingkungan()
    {
        return $this->belongsTo(Lingkungan::class);
    }
    public function anggotaKeluargas()
    {
        return $this->hasMany(AnggotaKeluarga::class, 'kepala_keluarga_id');
    }
}
