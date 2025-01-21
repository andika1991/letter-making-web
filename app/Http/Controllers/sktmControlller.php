<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\SuratTidakMampu;
use Illuminate\Http\Request;

class SktmControlller extends Controller
{
    /**
     * Menampilkan daftar SKTM.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Mengambil semua data SKTM dan menghitung total
        $data = [
            'totalSktm' => SuratTidakMampu::count(), // Total data di tabel SKTM
            'sktms' => SuratTidakMampu::paginate(10), // Data SKTM dengan pagination (10 per halaman)
        ];

        return view('dashboard.sktm.index', [
            'title' => 'SKTM',
        ],$data);
    }


    public function create()
    {
        // Mengambil semua data SKTM dan menghitung total
      

        return view('dashboard.sktm.create', [
            'title' => 'SKTM bUAT SURAT',
        ]);
    }

    public function store(Request $request)
    {
        // Validasi data input
        $validated = $request->validate([
            'nosurat'=>'required|numeric',
            'nama' => 'required|string|max:255',
            'jeniskelamin' => 'required|string',
            'tempattgllahir' => 'required|string',
            'agama' => 'required|string',
            'alamat' => 'required|string',
            'alamat2' => 'nullable|string',
            'tujuan' => 'nullable|string',
            'umur' => 'nullable|integer',
            'muridmhs' => 'required|string',
        ]);

        // Menyimpan data SKTM ke database
        SuratTidakMampu::create($validated);

        // Redirect ke halaman SKTM dengan pesan sukses
        return redirect('dashboard/sktm')->with('success', 'Data SKTM berhasil disimpan.');
    }

    /**
     * Menampilkan detail SKTM berdasarkan ID.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $sktm = SuratTidakMampu::findOrFail($id); // Mengambil data berdasarkan ID

        return view('dashboard.sktm.show', compact('sktm'));
    }

    /**
     * Menghapus data SKTM.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $sktm = SuratTidakMampu::findOrFail($id);
        $sktm->delete();

        return redirect('/dashboard/sktm')->with('success', 'Data SKTM berhasil dihapus.');
    }

    public function cetak($id)
    {
        $sktm = SuratTidakMampu::findOrFail($id); // Mengambil data SKTM berdasarkan ID

        // Menggunakan PDF facade untuk load view dan membuat PDF
        $pdf = PDF::loadView('dashboard.sktm.cetak', [
            'title' => 'Cetak SKTM',
            'sktm' => $sktm,
        ])->setPaper('a4', 'potrait'); // Mengatur ukuran kertas A4 potrait

        // Mengembalikan file PDF untuk di-download atau ditampilkan
        return $pdf->stream('SKTM_' . $sktm->nosurat . '.pdf');
    }
}
