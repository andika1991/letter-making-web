<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domisili extends Model
{
    use HasFactory;

    // Using $fillable instead of $guarded for mass-assignment protection
    protected $fillable = [
        'kodeSurat', 'noSurat', 'nama', 'nik', 'tempatTglLahir', 'pekerjaan', 'alamat', 
        'alamatKK', 'keterangan', 'tglSurat', 'ttd', 'namaTtd', 'jenisKelamin', 'agama'
    ];

    // Use 'noSurat' as the route key for the model instead of the default 'id'
    public function getRouteKeyName()
    {
        return 'noSurat';
    }
}
