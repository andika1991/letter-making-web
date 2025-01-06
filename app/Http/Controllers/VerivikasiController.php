<?php

namespace App\Http\Controllers;

use App\Models\Usaha;
use App\Models\Domisili;
use Illuminate\Http\Request;

class VerivikasiController extends Controller
{
    /**
     * Method untuk mengambil data berdasarkan parameter dari URL dan menampilkan di view.
     *
     * @param string $kodeSurat
     * @param string $noSurat
     * @param int $tahun
     * @return \Illuminate\View\View
     */
    public function getSuratData($hash)
    {
        // Variabel untuk menyimpan data yang ditemukan
        $data = null;
    
        // Cari data di model Usaha berdasarkan hash
        $data = Usaha::where('hash', $hash)->first();
    
        // Jika data tidak ditemukan di model Usaha, cari di model Domisili
        if (!$data) {
            $data = Domisili::where('hash', $hash)->first();
        }
    
        // Kembalikan view dengan data yang ditemukan
        return view('verivikasi', [
            'data' => $data,
            'hash' => $hash,
        ]);
    }
    
}
