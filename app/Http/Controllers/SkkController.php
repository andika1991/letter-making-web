<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\Kematian;


use Illuminate\Http\Request;

class SkkController extends Controller
{
    
    public function index()
    {
        // Mengambil semua data SKTM dan menghitung total
        $data = [
            'totalSKK' => Kematian::count(), // Total data di tabel SKTM
            'skk' => Kematian::paginate(10), // Data SKTM dengan pagination (10 per halaman)
        ];

        return view('dashboard.skk.index', [
            'title' => 'skk',
        ],$data);
    }


    public function create()
    {
        return view('dashboard.skk.create', [
            'title' => 'Buat Surat Kenatian',
        ]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nosurat' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'tempatTanggallahir' => 'required|string|max:255', // Pastikan nama sesuai dengan kolom di DB
            'jeniskelamin' => 'required|string',
            'agama' => 'required|string|max:255',
            'pekerjaan' => 'nullable|string|max:255',
            'umur' => 'required|numeric',
            'alamat' => 'required|string|max:255',
            'tglmeninggal' => 'required|date',
            'waktu' => 'required|string|max:255',
            'tempatkematian' => 'required|string|max:255',
            'lokasipemakaman' => 'required|string|max:255',
            'sebabkematian' => 'required|string|max:255',
        ]);
    
        // Menyimpan data setelah validasi
        
            Kematian::create($validatedData);
    
            // Redirect ke halaman index setelah data berhasil disimpan
            return redirect('dashboard/kematian')->with('success', 'Data Surat Kematian berhasil disimpan!');
      
    }
    public function cetak($id)
    {
        $skk = Kematian::findOrFail($id); // Get data SKK based on the ID
    
       
        $pdf = PDF::loadView('dashboard.skk.cetak', [
            'title' => 'Cetak SKK',
            'skk' => $skk,
        ])->setPaper('a4', 'portrait'); // Paper orientation
    
        // Return the PDF
        return $pdf->stream('SKK_' . $skk->nosurat . '.pdf');
    }
    
    
    public function destroy($id)
    {
        $skk = Kematian::findOrFail($id);
        $skk->delete();

        return redirect('/dashboard/kematian')->with('success', 'Data SKK berhasil dihapus.');
    }
    

    

}
