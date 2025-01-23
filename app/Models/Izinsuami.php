<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Izinsuami extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'izinsuami';

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
        'jeniskelamsuami',
        'agamasuami',
        'pekerjaansuami',
        'alamatsuami',
        'namaistri',
        'ttlistri',
        'nikistri',
        'jeniskelamistri',
        'agamaistri',
        'pekerjaanistri',
        'alamatistri',
        'tujuan',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'ttlsuami' => 'date', // Format tanggal untuk kolom tanggal lahir suami
        'ttlistri' => 'date', // Format tanggal untuk kolom tanggal lahir istri
    ];
}
