<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratAhliWaris extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'surat_ahli_waris';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nosurat',
        'nama_almarhum',
        'tahun_meninggal',
        'lokasi_meninggal',
        'tujuan',
        'luas_tanah',
        'alamat_tanah',
        'penerima_kuasa',
        'tanggal_surat',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'tahun_meninggal' => 'integer',
        'luas_tanah' => 'integer',
        
        'tanggal_surat' => 'date',
    ];

    /**
     * Get the penerima kuasa associated with the surat ahli waris.
     * Assuming there is a related User model.
     */
    public function penerimaKuasa()
    {
        return $this->belongsTo(User::class, 'penerima_kuasa');
    }
}
