<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skps extends Model
{
    use HasFactory;
    protected $table = 'skps';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nosurat',
        'nama',
        'nik',
        'ttl',
        'jeniskelam',
        'agama',
        'pekerjaan',
        'kewarga',
        'alamat',
        'tujuan',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
  
}
