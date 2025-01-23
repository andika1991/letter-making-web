<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Skln;
class Sklncontroller extends Controller
{
    
    public function index()
    {
        // Mengambil semua data SKTM dan menghitung total
        $data = [
            'totalSKLN' => Skln::count(), // Total data di tabel SKTM
            'skln' => Skln::paginate(10), // Data SKTM dengan pagination (10 per halaman)
        ];

        return view('dashboard.skln.index', [
            'title' => 'skln',
        ],$data);
    }


    public function create()
    {
        return view('dashboard.skln.create', [
            'title' => 'Buat Surat Keterangan Keluar Negeri',
        ]);
    }

    public function store(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'nosurat' => 'required|string|max:255|unique:skln,nosurat', // No Surat harus unik
        'nama' => 'required|string|max:255',
        'nik' => 'required|string|size:16', // Validasi panjang NIK harus 16 karakter
        'ttl' => 'required|date', // Tanggal Lahir
        'jeniskelam' => 'required', // Jenis Kelamin harus salah satu dari L atau P
        'alamat' => 'required|string|max:500', // Alamat maksimal 500 karakter
        'kondisi' => 'required|string|max:255',
        'tujuan' => 'required|string|max:255',
    ]);

    // Menyimpan data ke database
    Skln::create($validatedData);

    // Redirect ke halaman index setelah data berhasil disimpan
    return redirect('dashboard/skln')->with('success', 'Data Surat Keterangan berhasil disimpan!');
}


public function cetak($id)
{
    $skln = Skln::findOrFail($id); // Get data SKK based on the ID

   
    $pdf = PDF::loadView('dashboard.skln.cetak', [
        'title' => 'Cetak SKLN',
        'skln' => $skln,
    ])->setPaper('a4', 'portrait'); // Paper orientation

    // Return the PDF
    return $pdf->stream('SKLN_' . $skln->nosurat . '.pdf');
}


}
