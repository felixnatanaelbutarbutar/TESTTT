<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaKeluarga extends Model
{
    use HasFactory;

    protected $fillable = [
        'kepala_keluarga_id',
        'nama',
        'jeniskelamin',
        'tanggallahir',
        'baptis',
        'sidi',
        'alamat',
        'notelpon',
    ];

    // Relationship with kepala_keluargas table
    public function kepalaKeluarga()
    {
        return $this->belongsTo(KepalaKeluarga::class);
    }
    public function anggotaKeluargas()
    {
        return $this->hasMany(AnggotaKeluarga::class);
    }

}

