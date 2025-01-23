<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use App\Models\Sksp;

class Skspcontroller extends Controller
{
    public function index()
    {
        // Mengambil semua data SKTM dan menghitung total
        $data = [
            'totalSksp' => Sksp::count(), // Total data di tabel SKTM
            'sksp' => Sksp::paginate(10), // Data SKTM dengan pagination (10 per halaman)
        ];

        return view('dashboard.sksp.index', [
            'title' => 'sksp',
        ],$data);
    }


    public function create()
    {
        return view('dashboard.sksp.create', [
            'title' => 'Buat Surat ',
        ]);
    }

    public function store(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'nosurat' => 'required|string|max:50|unique:sksp,nosurat',
        'nama' => 'required|string|max:100',
        'nik' => 'required|string|max:20|unique:sksp,nik',
        'ttl' => 'required|date',
        'agama' => 'required|string|max:50',
        'status' => 'required|string|max:50',
        'alamat' => 'required|string',
    ]);

    // Menyimpan data setelah validasi
    Sksp::create($validatedData);

    // Redirect ke halaman index setelah data berhasil disimpan
    return redirect('dashboard/sksp')->with('success', 'Data SKSP berhasil disimpan!');
}

public function cetak($id)
{
    $sksp = Sksp ::findOrFail($id); // Get data SKK based on the ID

   
    $pdf = PDF::loadView('dashboard.sksp.cetak', [
        'title' => 'Cetak SKSP',
        'sksp' => $sksp,
    ])->setPaper('a4', 'portrait'); // Paper orientation

    // Return the PDF
    return $pdf->stream('SKSP' . $sksp->nosurat . '.pdf');
}

}
