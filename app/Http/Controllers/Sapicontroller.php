<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\Sapi;
use Illuminate\Http\Request;

class Sapicontroller extends Controller
{
    public function index()
    {
        // Mengambil semua data SKTM dan menghitung total
        $data = [
            'totalSapi' => Sapi::count(), // Total data di tabel SKTM
            'sapi' => Sapi::paginate(10), // Data SKTM dengan pagination (10 per halaman)
        ];

        return view('dashboard.sapi.index', [
            'title' => 'sapi',
        ],$data);
    }

    public function create()
    {
        return view('dashboard.sapi.create', [
            'title' => 'Buat Surat Jalan Sapi',
        ]);
    }

    public function store(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'nosurat' => 'required|string|max:255',
        'nama' => 'required|string|max:255',
        'jeniskelam' => 'required|string',
        'umur' => 'required|numeric',
        'pekerjaan' => 'nullable|string|max:255',
        'alamat' => 'required|string|max:255',
        'diperolehasal' => 'required|string|max:255',
        'jenishewan' => 'required|string|max:255',
        'banyaknya' => 'required|numeric',
        'umur_hewan' => 'required|numeric',
        'warna' => 'required|string|max:255',
        'tujuan' => 'required|string|max:255',
        'jenisangkutan' => 'required|string|max:255',
    ]);

        Sapi::create($validatedData);

        // Redirect dengan pesan sukses
        return redirect('dashboard/suratjalansapi')->with('success', 'Data Surat Jalan Sapi berhasil disimpan!');
   
}

public function cetak($id)
{
    $sapi = Sapi::findOrFail($id); // Get data SKK based on the ID

   
    $pdf = PDF::loadView('dashboard.sapi.cetak', [
        'title' => 'Cetak Sapi',
        'sapi' => $sapi,
    ])->setPaper('a4', 'portrait'); // Paper orientation

    // Return the PDF
    return $pdf->stream('Sapi_' . $sapi->nosurat . '.pdf');
}


public function destroy($id)
{
    $pik = Sapi::findOrFail($id);
    $pik->delete();

    return redirect('/dashboard/suratjalansapi')->with('success', 'Data Surat Jalan Sapi berhasil dihapus.');
}

}
