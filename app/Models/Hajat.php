<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hajat extends Model
{
    use HasFactory;

    // The table associated with the model
    protected $table = 'hajat';

    // The attributes that are mass assignable
    protected $fillable = [
        'nama',
        'umur',
        'pekerjaan',
        'alamat',
        'nohp',
        'nomor',
        'dalamrangka',
        'denganhiburan',
        'haritgl',
        'waktu',
        'tempat',
    ];

    // The attributes that should be hidden for arrays
    protected $hidden = [];

    // The attributes that should be cast to native types
    protected $casts = [
        'haritgl' => 'date', // Cast 'haritgl' as date
    ];
}
