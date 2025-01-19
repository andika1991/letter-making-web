<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spph extends Model
{
    use HasFactory;
    protected $table = 'data';

    /**
     * Atribut yang dapat diisi secara massal.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'umur',
        'pekerjaan',
        'hiburan',
        'alamat',
        'nohp',
        'haritgl',
        'waktu',
        'tempat',
    ];

    /**
     * Atribut yang harus di-cast ke tipe data tertentu.
     *
     * @var array
     */
    protected $casts = [
        'haritgl' => 'date',
        'waktu' => 'datetime:H:i', // Format jam:menit
    ];
}
