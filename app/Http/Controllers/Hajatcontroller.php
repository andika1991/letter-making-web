<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\Hajat;
use Illuminate\Http\Request;

class Hajatcontroller extends Controller
{
       
    public function index()
    {
        // Mengambil semua data SKTM dan menghitung total
        $data = [
            'totalhajat' => Hajat::count(), // Total data di tabel SKTM
            'hajat' => Hajat::paginate(10), // Data SKTM dengan pagination (10 per halaman)
        ];

        return view('dashboard.hajat.index', [
            'title' => 'hajat',
        ],$data);
    }

    public function create()
    {
        return view('dashboard.hajat.create', [
            'title' => 'Buat Surat Pernyataan Hajat',
        ]);
    }

    public function store(Request $request)
{
    // Validasi input dari form
    $validatedData = $request->validate([
        'nama' => 'required|string|max:255',              // Nama lengkap
        'umur' => 'required|numeric',                     // Umur
        'pekerjaan' => 'required|string|max:255',         // Pekerjaan
        'alamat' => 'required|string|max:255',            // Alamat
        'nohp' => 'required|string|max:15',               // Nomor HP
        'nomor' => 'required|string|max:255',             // Nomor surat
        'dalamrangka' => 'required|string|max:255',       // Dalam rangka
        'denganhiburan' => 'required|string|max:255',     // Dengan hiburan
        'haritgl' => 'required|date',                     // Hari dan tanggal
        'waktu' => 'required|string|max:255',             // Waktu
        'tempat' => 'required|string|max:255',            // Tempat
    ]);

    // Simpan data ke dalam tabel 'hajats'
    Hajat::create([
        'nama' => $validatedData['nama'],
        'umur' => $validatedData['umur'],
        'pekerjaan' => $validatedData['pekerjaan'],
        'alamat' => $validatedData['alamat'],
        'nohp' => $validatedData['nohp'],
        'nomor' => $validatedData['nomor'],
        'dalamrangka' => $validatedData['dalamrangka'],
        'denganhiburan' => $validatedData['denganhiburan'],
        'haritgl' => $validatedData['haritgl'],
        'waktu' => $validatedData['waktu'],
        'tempat' => $validatedData['tempat'],
    ]);

    // Redirect ke halaman dashboard/kematian dengan pesan sukses
    return redirect('dashboard/hajat')->with('success', 'Data Hajat berhasil disimpan!');
}


public function cetak($id)
{
    $hajat = Hajat::findOrFail($id); // Get data SKK based on the ID

   
    $pdf = PDF::loadView('dashboard.hajat.cetak', [
        'title' => 'Cetak HAJAT',
        'hajat' => $hajat,
    ])->setPaper('a4', 'portrait'); // Paper orientation

    // Return the PDF
    return $pdf->stream('HAJAT_' . $hajat->id . '.pdf');
}

    
}
