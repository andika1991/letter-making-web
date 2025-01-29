<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratIzinOrtu extends Model
{
    use HasFactory;

    protected $table = 'surat_izin_ortu';

    protected $fillable = [
        'nomor_surat',
        'keperluan',
        'kepala_kampung',
        'pemberi_izin_role',
        'pemberi_izin_nama',
        'pemberi_izin_tempat_lahir',
        'pemberi_izin_tgl_lahir',
        'pemberi_izin_nik',
        'pemberi_izin_jenis_kelamin',
        'pemberi_izin_agama',
        'pemberi_izin_pekerjaan',
        'pemberi_izin_alamat',
        'pemohon_izin_role',
        'pemohon_izin_nama',
        'pemohon_izin_tempat_lahir',
        'pemohon_izin_tgl_lahir',
        'pemohon_izin_nik',
        'pemohon_izin_jenis_kelamin',
        'pemohon_izin_agama',
        'pemohon_izin_pekerjaan',
        'pemohon_izin_alamat',
    ];
}
