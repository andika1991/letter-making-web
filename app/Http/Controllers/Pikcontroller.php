<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\Pik;
use Illuminate\Http\Request;

class Pikcontroller extends Controller
{
    
    public function index()
    {
        // Mengambil semua data SKTM dan menghitung total
        $data = [
            'totalPIK' => Pik::count(), // Total data di tabel SKTM
            'PIK' => Pik::paginate(10), // Data SKTM dengan pagination (10 per halaman)
        ];

        return view('dashboard.pik.index', [
            'title' => 'PIK',
        ],$data);
    }

     
    public function create()
    {
        return view('dashboard.pik.create', [
            'title' => 'Buat Surat Permohonan Izin Keramaian',
        ]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nosurat' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'agama' => 'required|string|max:255',
            'pekerjaan' => 'nullable|string|max:255',
            'status_perkawinan' => 'nullable|string|max:255',
            'no_hp' => 'nullable|string|max:255',
            'hariac' => 'nullable|string|max:255',
            'tanggalac' => 'required|date',
            'waktuac' => 'nullable|string|max:255',
            'acaraac' => 'nullable|string|max:255',
            'alamatac' => 'nullable|string|max:255',
            'alamat' => 'nullable|string|max:255',
        ]);
    
        // Menyimpan data setelah validasi
        
            Pik::create($validatedData);
    
            // Redirect ke halaman index setelah data berhasil disimpan
            return redirect('dashboard/permohonankeramaian')->with('success', 'Data Surat Kematian berhasil disimpan!');
      
    }


    public function cetak($id)
    {
        $pik = Pik::findOrFail($id); // Get data SKK based on the ID
    
       
        $pdf = PDF::loadView('dashboard.pik.cetak', [
            'title' => 'Cetak PIK',
            'pik' => $pik,
        ])->setPaper('a4', 'portrait'); // Paper orientation
    
        // Return the PDF
        return $pdf->stream('PIK_' . $pik->nosurat . '.pdf');
    }
    
   
}
