<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Skps;

class Skpscontroller extends Controller
{
    public function index()
    {
        // Mengambil semua data SKTM dan menghitung total
        $data = [
            'totalSkps' => Skps::count(), // Total data di tabel SKTM
            'skps' => Skps::paginate(10), // Data SKTM dengan pagination (10 per halaman)
        ];

        return view('dashboard.skps.index', [
            'title' => 'skps',
        ],$data);
    }


    public function create()
    {
        return view('dashboard.skps.create', [
            'title' => 'Buat Surat ',
        ]);
    }
    public function store(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'nosurat' => 'required|string|max:255|unique:skps,nosurat',
        'nama' => 'required|string|max:255',
        'nik' => 'required|string|size:16', // Validasi panjang NIK harus tepat 16 karakter
        'ttl' => 'required|date', // Format tanggal yang valid
        'jeniskelam' => 'required|in:L,P', // Jenis Kelamin hanya bisa L atau P
        'agama' => 'required|string|max:255',
        'pekerjaan' => 'nullable|string|max:255', // Opsional
        'kewarga' => 'required|string|max:255',
        'alamat' => 'required|string|max:500', // Maksimal 500 karakter untuk alamat
        'tujuan' => 'required|string|max:255',
    ]);

    // Simpan data ke database
    Skps::create($validatedData);

    // Redirect ke halaman index dengan pesan sukses
    return redirect('dashboard/skps')->with('success', 'Data Surat Keterangan berhasil disimpan!');
}


public function cetak($id)
{
    $skps = Skps ::findOrFail($id); // Get data SKK based on the ID

   
    $pdf = PDF::loadView('dashboard.skps.cetak', [
        'title' => 'Cetak SKPS',
        'skps' => $skps,
    ])->setPaper('a4', 'portrait'); // Paper orientation

    // Return the PDF
    return $pdf->stream('SKPS' . $skps->nosurat . '.pdf');
}
}
