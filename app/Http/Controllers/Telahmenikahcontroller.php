<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Telahmenikah;


class Telahmenikahcontroller extends Controller
{
    
    public function index()
    {
        // Mengambil semua data SKTM dan menghitung total
        $data = [
            'totalTelahmenikah' => Telahmenikah::count(), // Total data di tabel SKTM
            'telahmenikah' => Telahmenikah::paginate(10), // Data SKTM dengan pagination (10 per halaman)
        ];

        return view('dashboard.telahmenikah.index', [
            'title' => 'Telah Menikah',
        ],$data);
    }


    
    public function create()
    {
        // Mengambil semua data SKTM dan menghitung total
      

        return view('dashboard.telahmenikah.create', [
            'title' => 'Buat Surat Telah Menikah',
        ]);
    }
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nosurat' => 'required|string|max:255|unique:telahmenikah,nosurat',
            'namasuami' => 'required|string|max:255',
            'niksuami' => 'required|string|max:255',
            'ttlsuami' => 'required|date',
            'jeniskelam' => 'required|in:L,P',
            'agama' => 'required|string|max:255',
            'pekerjaan' => 'nullable|string|max:255',
            'alamat' => 'required|string|max:500',
            'namaistri' => 'required|string|max:255',
            'ttlistri' => 'required|date',
            'nikistri' => 'required|string|size:16',
            'jeniskelaministri' => 'required|in:L,P',
            'agamaistri' => 'required|string|max:255',
            'pekerjaanistri' => 'nullable|string|max:255',
            'alamatistri' => 'required|string|max:500',
            'yangmembuatpernyataan' => 'required|string|max:255',
            'tahunmenikah' => 'required|integer|min:1900|max:' . date('Y'),
        ]);
    
        // Simpan data ke database
        TelahMenikah::create($validatedData);
    
        // Redirect ke halaman index dengan pesan sukses
        return redirect('dashboard/telahmenikah')->with('success', 'Data Surat Pernyataan Telah Menikah berhasil disimpan!');
    }
    public function cetak($id)
    {
        $telahmenikah = Telahmenikah::findOrFail($id); // Get data SKK based on the ID
    
       
        $pdf = PDF::loadView('dashboard.telahmenikah.cetak', [
            'title' => 'Cetak Telah Menikah',
            'telahmenikah' => $telahmenikah,
        ])->setPaper('a4', 'portrait'); // Paper orientation
    
        // Return the PDF
        return $pdf->stream('telahmenikah_' . $telahmenikah->namasuami . '.pdf');
    }
    public function destroy($id)
    {
        $spph = Telahmenikah::findOrFail($id);
        $spph->delete();

        return redirect('/dashboard/telahmenikah')->with('success', 'Data telahmenikah berhasil dihapus.');
    }
}
