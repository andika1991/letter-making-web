<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SKTM extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang digunakan oleh model ini.
     *
     * @var string
     */
    protected $table = 'sktm';

    /**
     * Kolom-kolom yang dapat diisi (mass assignable).
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'nik',
        'nomor_surat',
        'kode_surat',
        'ttd_scan',
        'qrcode',
        'hash',
    ];

    /**
     * Kolom-kolom yang dikecualikan dari hasil serialisasi.
     *
     * @var array
     */
    protected $hidden = [
        'hash',
    ];
}
