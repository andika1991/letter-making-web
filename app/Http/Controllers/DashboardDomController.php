<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Domisili;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Storage;

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;
class DashboardDomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.domisilis.index', [
            'title' => 'Domisili',
            'domisilis' => Domisili::latest()->paginate(8),
            'totalDomisili' => Domisili::count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.domisilis.create', [
            'title' => 'Domisili',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  
    
     public function store(Request $request)
     {
         // Validasi input
         $validatedData = $request->validate([
             'kodeSurat' => 'required|numeric',
             'noSurat' => 'required|numeric',
             'nama' => 'required|max:255',
             'nik' => 'required|numeric',
             'tempatTglLahir' => 'required|max:255',
             'pekerjaan' => 'required|max:255',
             'alamat' => 'required|max:255',
             'alamatkk' => 'required|max:255', // Validasi alamat KK
             'keterangan' => 'required|max:255',
             'tglSurat' => 'required|date',
             'ttd' => 'required|max:255',
             'namaTtd' => 'required|max:255',
             'jeniskelamin' => 'required|in:Laki-Laki,Perempuan', // Validasi jenisKelamin
             'agama' => 'required|in:Islam,Kristen,Katolik,Hindu,Buddha,Konghucu', // Validasi agama
         ]);
     
         try {
             // Simpan data surat domisili ke database
             Domisili::create($validatedData);
     
             return redirect('/dashboard/domisili')->with('success', 'Surat domisili berhasil ditambahkan!');
         } catch (\Exception $e) {
             return back()->withErrors(['error' => 'Terjadi kesalahan saat menyimpan data.'])->withInput();
         }
     }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Domisili  $domisili
     * @return \Illuminate\Http\Response
     */
    public function show(Domisili $domisili)
    {
        return view('dashboard.domisilis.show', [
            'title' => 'Domisili',
            'domisili' => $domisili,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Domisili  $domisili
     * @return \Illuminate\Http\Response
     */
    public function edit(Domisili $domisili)
    {
        return view('dashboard.domisilis.edit', [
            'title' => 'Edit',
            'domisili' => $domisili,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Domisili  $domisili
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Domisili $domisili)
{
    // Definisikan aturan validasi
    $rules = [
        'kodeSurat' => 'required|numeric',
        'nama' => 'required|string|max:255',
        'nik' => 'required|numeric|digits:16', // Pastikan NIK memiliki 16 digit
        'tempatTglLahir' => 'required|string|max:255',
        'pekerjaan' => 'required|string|max:255',
        'alamat' => 'required|string|max:255',
        'keterangan' => 'required|string|max:255',
        'tglSurat' => 'required|date',
        'ttd' => 'required|string|max:255',
        'namaTtd' => 'required|string|max:255',
    ];

    // Validasi unik untuk noSurat hanya jika berbeda dari data lama
    if ($request->noSurat != $domisili->noSurat) {
        $rules['noSurat'] = 'required|numeric|unique:domisilis,noSurat';
    }

    // Validasi data sesuai aturan
    $validatedData = $request->validate($rules);

    // Perbarui data pada model Domisili
    $domisili->update($validatedData);

    // Redirect dengan pesan sukses
    return redirect()->route('domisili.index')->with('success', 'Surat berhasil diedit!');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Domisili  $domisili
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domisili $domisili)
    {
        Domisili::destroy($domisili->id);

        return redirect('/dashboard/domisili')->with('success', 'Surat berhasil dihapus!');
    }

    public function cetak(Domisili $domisili)
    {
        $pdf = PDF::loadview('dashboard.domisilis.cetak', [
            'title' => 'Cetak',
            'domisili' => $domisili,
        ])->setPaper('a4', 'potrait');
        return $pdf->stream('Domisili_' . '' . $domisili->noSurat . '.pdf');
    }
}
