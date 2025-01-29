<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AhliWaris extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ahli_waris';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'surat_ahli_waris_id',
        'nama',
        'anakke',
        'umur',
        'alamat',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'anakke' => 'integer',
        'umur' => 'integer',
        'surat_ahli_waris_id' => 'integer',
    ];

    /**
     * Get the related Surat Ahli Waris for this Ahli Waris.
     */
    public function suratAhliWaris()
    {
        return $this->belongsTo(SuratAhliWaris::class, 'surat_ahli_waris_id');
    }
}
