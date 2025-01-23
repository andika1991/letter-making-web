<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\Izinsuami;
use Illuminate\Http\Request;

class Izinsuamicontroller extends Controller
{
    public function index()
    {
        // Mengambil semua data SKTM dan menghitung total
        $data = [
            'totalzin' => Izinsuami::count(), // Total data di tabel SKTM
            'izinsuami' => Izinsuami::paginate(10), // Data SKTM dengan pagination (10 per halaman)
        ];

        return view('dashboard.izinsuami.index', [
            'title' => 'Izin Suami',
        ],$data);
    }


    
    public function create()
    {
        return view('dashboard.izinsuami.create', [
            'title' => 'Buat Surat Izin Suami',
        ]);
    }

    public function store(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'nosurat' => 'required|string|max:255|unique:izinsuami,nosurat',
        
        // Data Suami
        'namasuami' => 'required|string|max:255',
        'ttlsuami' => 'required|date',
        'niksuami' => 'required|string|size:16',
        'jeniskelamsuami' => 'required|in:L,P',
        'agamasuami' => 'required|string|max:255',
        'pekerjaansuami' => 'nullable|string|max:255',
        'alamatsuami' => 'required|string|max:500',
        
        // Data Istri
        'namaistri' => 'required|string|max:255',
        'ttlistri' => 'required|date',
        'nikistri' => 'required|string|size:16',
        'jeniskelamistri' => 'required|in:L,P',
        'agamaistri' => 'required|string|max:255',
        'pekerjaanistri' => 'nullable|string|max:255',
        'alamatistri' => 'required|string|max:500',
        
        // Tujuan
        'tujuan' => 'required|string|max:255',
    ]);

    // Simpan data ke database
    Izinsuami::create($validatedData);

    // Redirect ke halaman index dengan pesan sukses
    return redirect('dashboard/izinsuami')->with('success', 'Data Surat Izin Suami berhasil disimpan!');
}



public function cetak($id)
{
    $Izinsuami = Izinsuami::findOrFail($id); // Get data SKK based on the ID

   
    $pdf = PDF::loadView('dashboard.izinsuami.cetak', [
        'title' => 'Cetak Ket Izin Suami',
        'izin' => $Izinsuami,
    ])->setPaper('a4', 'portrait'); // Paper orientation

    // Return the PDF
    return $pdf->stream('Izinsuami_' . $Izinsuami->nosurat . '.pdf');
}

}
