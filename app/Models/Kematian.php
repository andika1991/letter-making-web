<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kematian extends Model
{
    use HasFactory;


    protected $table = 'kematian';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nosurat',
        'nama',
        'tempatTanggallahir',
        'jeniskelamin',
        'agama',
        'pekerjaan',
        'alamat',
        'tglmeninggal',
        'waktu',
        'tempatkematian',
        'lokasipemakaman',
        'sebabkematian',
        'umur',
            ];  

    // Kolom yang tidak boleh diisi secara massal
    protected $guarded = [];

    // Jika menggunakan kolom timestamp
    public $timestamps = true;
}
