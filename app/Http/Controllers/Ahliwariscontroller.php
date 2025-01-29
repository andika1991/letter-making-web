<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\AhliWaris;
use App\Models\SuratAhliWaris;
use Illuminate\Http\Request;

class Ahliwariscontroller extends Controller
{
        
    public function index()
    {
        // Mengambil semua data SKTM dan menghitung total
        $data = [
            'totalahliwaris' => SuratAhliWaris::count(), // Total data di tabel SKTM
            'ahliwaris' =>SuratAhliWaris::paginate(10), // Data SKTM dengan pagination (10 per halaman)
        ];

        return view('dashboard.ahliwaris.index', [
            'title' => 'Ahli Waris',
        ],$data);
    }

    public function create()
    {
        return view('dashboard.ahliwaris.create', [
            'title' => 'Buat Surat Keterangan Ahli Waris',
        ]);
    }

    public function store(Request $request)
{
    // Cek apakah ini adalah permintaan untuk menyimpan Surat Ahli Waris
    if ($request->isMethod('post') && !$request->has('ahli_waris')) {
        // Validasi data Surat Ahli Waris
        $validatedData = $request->validate([
            'nosurat' => 'required|string|max:255',
            'nama_almarhum' => 'required|string|max:255',
            'tahun_meninggal' => 'required|integer',
            'lokasi_meninggal' => 'required|string|max:255',
            'tujuan' => 'required|string|max:255',
            'luas_tanah' => 'required|integer',
            'alamat_tanah' => 'required|string',
            'penerima_kuasa' => 'required|string',
            'tanggal_surat' => 'required|date',
        ]);

        // Simpan data Surat Ahli Waris
        $suratAhliWaris = SuratAhliWaris::create($validatedData);

        return redirect()
            ->back()
            ->with('surat_id', $suratAhliWaris->id) // Mengirim ID surat ke sesi
            ->with('success', 'Surat Ahli Waris berhasil disimpan.');
    }

    // Cek apakah ini adalah permintaan untuk menyimpan data Ahli Waris
    if ($request->has('ahli_waris')) {
        // Validasi data Ahli Waris
        $validatedData = $request->validate([
            'surat_ahli_waris_id' => 'required|exists:surat_ahli_waris,id',
            'ahli_waris.*.nama' => 'required|string|max:255',
            'ahli_waris.*.anakke' => 'required|integer',
            'ahli_waris.*.umur' => 'required|integer',
            'ahli_waris.*.alamat' => 'required|string',
        ]);

        // Simpan setiap data ahli waris
        foreach ($validatedData['ahli_waris'] as $ahliWarisData) {
            AhliWaris::create([
                'surat_ahli_waris_id' => $validatedData['surat_ahli_waris_id'],
                'nama' => $ahliWarisData['nama'],
                'anakke' => $ahliWarisData['anakke'],
                'umur' => $ahliWarisData['umur'],
                'alamat' => $ahliWarisData['alamat'],
            ]);
        }

        return redirect('dashboard/ahliwaris')
            
            ->with('success', 'Data ahli waris berhasil disimpan.');
    }

    return redirect()->back()->withErrors('Permintaan tidak valid.');
}

public function cetak($id)
{
    // Cari Surat Ahli Waris berdasarkan ID
    $suratAhliWaris = SuratAhliWaris::findOrFail($id);

    // Ambil semua data ahli waris terkait dengan surat
    $ahliWarisData = AhliWaris::where('surat_ahli_waris_id', $id)->get();

    // Cek apakah data ahli waris ada
    if ($ahliWarisData->isEmpty()) {
        return redirect()->back()->withErrors('Tidak ada data ahli waris untuk surat ini.');
    }

    // Buat file PDF
    $pdf = PDF::loadView('dashboard.ahliwaris.cetak', [
        'title' => 'Cetak Surat Ahli Waris',
        'suratAhliWaris' => $suratAhliWaris,
        'ahliWarisData' => $ahliWarisData,
    ])->setPaper('a4', 'portrait'); // Orientasi kertas

    
    return $pdf->stream('suratAhliWaris_' . $suratAhliWaris->nosurat . '.pdf');
}


public function destroy($id)
{
    $suratAhliWaris = SuratAhliWaris::findOrFail($id);
    $suratAhliWaris->delete();

    return redirect('/dashboard/ahliwaris')->with('success', 'Data Ahli Waris berhasil dihapus.');
}


}
