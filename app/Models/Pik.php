<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pik extends Model
{
    use HasFactory;
    protected $table = 'suratpermohonankrm';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nosurat',
        'nama',
        'tempat_lahir',
        'jeniskelamin',
        'agama',
        'pekerjaan',
         'tanggal_lahir',
        'status_perkawinan',
        'alamat',
        'no_hp',
        'hariac',
        'tanggalac',
        'waktuac',
        'acaraac',
        'alamatac',
            ];  

    // Kolom yang tidak boleh diisi secara massal
    protected $guarded = [];

    // Jika menggunakan kolom timestamp
    public $timestamps = true;
}
