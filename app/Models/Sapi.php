<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sapi extends Model
{
    use HasFactory;
    protected $table = 'surat_jalan_sapi';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nosurat',
        'nama',
        'jeniskelam',
        'umur',
        'pekerjaan',
         'diperolehasal',
        'jenishewan',
        'alamat',
        'banyaknya',
        'umur_hewan',
        'warna',
        'tujuan',
        'jenisangkutan',
       ];  

    // Kolom yang tidak boleh diisi secara massal
    protected $guarded = [];

    // Jika menggunakan kolom timestamp
    public $timestamps = true;
}
