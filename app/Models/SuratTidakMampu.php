<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratTidakMampu extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'surattidakmampu';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nama',
        'jeniskelamin',
        'tempattgllahir',
        'agama',
        'alamat',
        'alamat2',
        'tujuan',
        'umur',
        'muridmhs',
        'nosurat',
    ];  

    // Kolom yang tidak boleh diisi secara massal
    protected $guarded = [];

    // Jika menggunakan kolom timestamp
    public $timestamps = true;
}
