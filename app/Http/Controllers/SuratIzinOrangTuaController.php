<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use App\Models\SuratIzinOrtu;

class SuratIzinOrangTuaController extends Controller
{
    /**
     * Tampilkan semua surat izin.
     */
    public function index()
    {
        $data = [
            'totalSuratIzinOrtu' => SuratIzinOrtu::count(), // Total data di tabel SuratIzinOrtu
            'suratIzinOrtu' => SuratIzinOrtu::paginate(10), // Data SuratIzinOrtu dengan pagination (10 per halaman)
            'title' => 'Surat Izin Orang Tua',
        ];

        return view('dashboard.SuratIzinOrangTua.index', $data);
    }

    /**
     * Form untuk membuat surat izin baru.
     */
    public function create()
    {
        return view('dashboard.SuratIzinOrangTua.create', [
            'title' => 'Buat Surat Izin Orang Tua',
        ]);
    }

    /**
     * Simpan data surat izin.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nomor_surat' => 'required|string',
            'keperluan' => 'required|string|max:255',
            'kepala_kampung' => 'required|string|max:255',
            'pemberi_izin_role' => 'required|string|max:255',
            'pemberi_izin_nama' => 'required|string|max:255',
            'pemberi_izin_tempat_lahir' => 'required|string|max:255',
            'pemberi_izin_tgl_lahir' => 'required|date',
            'pemberi_izin_nik' => 'nullable|string|max:255',
            'pemberi_izin_jenis_kelamin' => 'required|string|   ',
            'pemberi_izin_agama' => 'required|string|max:255',
            'pemberi_izin_pekerjaan' => 'required|string|max:255',
            'pemberi_izin_alamat' => 'required|string|max:255',
            'pemohon_izin_role' => 'required|string|max:255',
            'pemohon_izin_nama' => 'required|string|max:255',
            'pemohon_izin_tempat_lahir' => 'required|string|max:255',
            'pemohon_izin_tgl_lahir' => 'required|date',
            'pemohon_izin_nik' => 'nullable|string|max:255',
            'pemohon_izin_jenis_kelamin' => 'required|string|in:Laki-laki,Perempuan',
            'pemohon_izin_agama' => 'required|string|max:255',
            'pemohon_izin_pekerjaan' => 'required|string|max:255',
            'pemohon_izin_alamat' => 'required|string|max:255',
        ]);

        SuratIzinOrtu::create($validated);

        return redirect('dashboard/suratIzinOrtu')->with('success', 'Surat izin berhasil dibuat.');
    }

    /**
     * Tampilkan detail surat izin.
     */
    // public function show($id)
    // {
    //     $surat = SuratIzinOrtu::findOrFail($id);
    //     return view('SuratIzinOrangTua.show', compact('surat'));
    // }

    public function show(SuratIzinOrtu $surat)
    {
        return view('dashboard.SuratIzinOrangTua.show', [
            'title' => 'SuratIzinOrangTua',
            'active' => 'surat',
            'surat' => $surat,
        ]);
    }

    /**
     * Form untuk mengedit surat izin.
     */
    public function edit($id)
    {
        $surat = SuratIzinOrtu::findOrFail($id);
        return view('SuratIzinOrangTua.edit', compact('surat'));
    }

    /**
     * Update data surat izin.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nomor_surat' => 'required|string',
            'keperluan' => 'required|string',
            'kepala_kampung' => 'required|string',
            'pemberi_izin_role' => 'required|string',
            'pemberi_izin_nama' => 'required|string',
            'pemberi_izin_tempat_lahir' => 'required|string',
            'pemberi_izin_tgl_lahir' => 'required|date',
            'pemberi_izin_nik' => 'nullable|string',
            'pemberi_izin_jenis_kelamin' => 'required|string|in:Laki-laki,Perempuan',
            'pemberi_izin_agama' => 'required|string',
            'pemberi_izin_pekerjaan' => 'required|string',
            'pemberi_izin_alamat' => 'required|string',
            'pemohon_izin_role' => 'required|string',
            'pemohon_izin_nama' => 'required|string',
            'pemohon_izin_tempat_lahir' => 'required|string',
            'pemohon_izin_tgl_lahir' => 'required|date',
            'pemohon_izin_nik' => 'nullable|string',
            'pemohon_izin_jenis_kelamin' => 'required|string|in:Laki-laki,Perempuan',
            'pemohon_izin_agama' => 'required|string',
            'pemohon_izin_pekerjaan' => 'required|string',
            'pemohon_izin_alamat' => 'required|string',
        ]);

        $surat = SuratIzinOrtu::findOrFail($id);
        $surat->update($validated);

        return redirect('dashboard/SuratIzinOrangTua')->with('success', 'Surat izin berhasil diperbarui.');
    }

    /**
     * Hapus surat izin.
     */
    public function destroy($id)
    {
        $surat = SuratIzinOrtu::findOrFail($id);
        $surat->delete();
        
        return redirect('dashboard/suratIzinOrtu')->with('success', 'Surat izin berhasil dihapus.');
    }

    public function cetak($id)
    {
        $surat = SuratIzinOrtu::findOrFail($id); // Get data SKK based on the ID
    
       
        $pdf = PDF::loadView('dashboard.SuratIzinOrangTua.cetak', [
            'title' => 'Cetak orangtua',
            'surat' => $surat,
        ])->setPaper('a4', 'portrait'); // Paper orientation
    
        // Return the PDF
        return $pdf->stream('Surat Izin Orang Tua_' . ucfirst($surat->pemohon_izin_nama) . '.pdf');
    }
}
