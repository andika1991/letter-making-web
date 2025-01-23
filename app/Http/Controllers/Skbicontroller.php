<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Skbi;
class Skbicontroller extends Controller
{
    public function index()
    {
        // Mengambil semua data SKTM dan menghitung total
        $data = [
            'totalSkbi' => Skbi::count(), // Total data di tabel SKTM
            'skbi' => Skbi::paginate(10), // Data SKTM dengan pagination (10 per halaman)
        ];

        return view('dashboard.skbi.index', [
            'title' => 'skbi',
        ],$data);
    }


    public function create()
    {
        return view('dashboard.skbi.create', [
            'title' => 'Buat Surat Beda Identitas',
        ]);
    }


    public function store(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'nosurat' => 'required|string|max:255|unique:skbi,nosurat',
        'nama' => 'required|string|max:255',
        'nik' => 'required|string|size:16', // Validasi panjang NIK harus tepat 16 karakter
        'ttl' => 'required|date', // Format tanggal yang valid
        'jeniskelam' => 'required|in:L,P', // Jenis Kelamin hanya bisa L atau P
        'pekerjaan' => 'nullable|string|max:255',
        'agama' => 'required|string|max:255',
        'alamat' => 'required|string|max:500', // Maksimal 500 karakter untuk alamat
        'nama_anggota' => 'required|string|max:255',
        'nohkms' => 'nullable|string|max:255',
        'jeniskelamin_anggota' => 'required|in:L,P',
        'alamat_anggota' => 'required|string|max:500',
    ]);

    // Simpan data ke database
    Skbi::create($validatedData);

    // Redirect ke halaman index dengan pesan sukses
    return redirect('dashboard/skbi')->with('success', 'Data Surat Keterangan berhasil disimpan!');
}

public function cetak($id)
{
    $skbi = Skbi::findOrFail($id); // Get data SKK based on the ID

   
    $pdf = PDF::loadView('dashboard.skbi.cetak', [
        'title' => 'Cetak SKBI',
        'skbi' => $skbi,
    ])->setPaper('a4', 'portrait'); // Paper orientation

    // Return the PDF
    return $pdf->stream('SKBI_' . $skbi->nosurat . '.pdf');
}


public function destroy($id)
{
    $skbi = Skbi::findOrFail($id);
    $skbi->delete();

    return redirect('/dashboard/skbi')->with('success', 'Data SKBI berhasil dihapus.');
}

}
