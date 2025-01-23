<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\Spph;
use Illuminate\Http\Request;

class Spphcontroller extends Controller
{

    public function index()
    {
        // Mengambil semua data SKTM dan menghitung total
        $data = [
            'totalSpph' => Spph::count(), // Total data di tabel SKTM
            'spph' => Spph::paginate(10), // Data SKTM dengan pagination (10 per halaman)
        ];

        return view('dashboard.spph.index', [
            'title' => 'SPPH',
        ],$data);
    }

    public function store(Request $request)
    {
        // Validasi data input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'pekerjaan' => 'required|string',
            'hiburan' => 'required|string',
            'nohp' => 'required|string',
            'haritgl' => 'required|date',
            'alamat' => 'nullable|string',
            'waktu' => 'nullable|string',
            'umur' => 'nullable|integer',
            'tempat' => 'required|string',
        ]);

        // Menyimpan data SKTM ke database
        Spph::create($validated);

        // Redirect ke halaman SKTM dengan pesan sukses
        return redirect('dashboard/SPPH')->with('success', 'Data SPPH berhasil disimpan.');
    }

    public function create()
    {
        // Mengambil semua data SKTM dan menghitung total
        return view('dashboard.spph.create', [
            'title' => 'SPPH BUAT SURAT',
        ]);
    }

    public function cetak($id)
    {
        $spph = Spph::findOrFail($id); // Get data SKK based on the ID
    
       
        $pdf = PDF::loadView('dashboard.spph.cetak', [
            'title' => 'Cetak SKK',
            'skk' => $spph,
        ])->setPaper('a4', 'portrait'); // Paper orientation
    
        // Return the PDF
        return $pdf->stream('Spph_' . $spph->nama . '.pdf');
    }
    
}
