<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telahmenikah extends Model
{
    use HasFactory;
    protected $table = 'telahmenikah';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nosurat',
        'namasuami',
        'ttlsuami',
        'niksuami',
        'jeniskelam',
        'agama',
        'pekerjaan',
        'alamat',
        'namaistri',
        'ttlistri',
        'nikistri',
        'jeniskelaministri',
        'agamaistri',
        'pekerjaanistri',
        'alamatistri',
        'yangmembuatpernyataan',
        'tahunmenikah',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
 
}
