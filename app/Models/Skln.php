<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skln extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'skln';

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
        'alamat',
        'kondisi',
        'tujuan',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
   
}
