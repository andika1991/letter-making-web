<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skbi extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'skbi';

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
        'pekerjaan',
        'agama',
        'alamat',
        'nama_anggota',
        'nohkms',
        'jeniskelamin_anggota',
        'alamat_anggota',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'ttl' => 'date',
    ];
}
