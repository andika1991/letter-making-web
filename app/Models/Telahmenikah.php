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
    protected $casts = [
        'ttlsuami' => 'date', // Tanggal lahir suami di-cast ke format date
        'ttlistri' => 'date', // Tanggal lahir istri di-cast ke format date
        'tahunmenikah' => 'integer', // Tahun menikah di-cast ke integer
    ];
}
