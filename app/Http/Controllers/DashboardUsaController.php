<?php

namespace App\Http\Controllers;

use App\Models\Usaha;

use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Storage;
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;
class DashboardUsaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.usahas.index', [
            'title' => 'Usaha',
            'usahas' => Usaha::latest()->paginate(8),
            'totalUsaha' => Usaha::count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.usahas.create', [
            'title' => 'Usaha',
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
        'namaUsaha' => 'required|max:255',
        'jenisUsaha' => 'required|max:255',
        'alamatUsaha' => 'required|max:255',
        'mulaiBerdiri' => 'required|date',
        'keterangan' => 'required|string', // Adjust validation to handle rich text
        'tglSurat' => 'required|date',
        'ttd' => 'required|max:255',
        'namaTtd' => 'required|max:255',
        'jenisKelamin' => 'required|in:Laki-laki,Perempuan', // Add validation for gender
    ]);

    // Sanitizing and storing the 'keterangan' field to avoid XSS
    $keterangan = strip_tags($validatedData['keterangan']); // Remove HTML tags

    // Simpan data ke database tanpa QR code dan ttdscan
    Usaha::create([
        'kodeSurat' => $validatedData['kodeSurat'],
        'noSurat' => $validatedData['noSurat'],
        'nama' => $validatedData['nama'],
        'nik' => $validatedData['nik'],
        'tempatTglLahir' => $validatedData['tempatTglLahir'],
        'pekerjaan' => $validatedData['pekerjaan'],
        'alamat' => $validatedData['alamat'],
        'namaUsaha' => $validatedData['namaUsaha'],
        'jenisUsaha' => $validatedData['jenisUsaha'],
        'alamatUsaha' => $validatedData['alamatUsaha'],
        'mulaiBerdiri' => $validatedData['mulaiBerdiri'],
        'keterangan' => $keterangan, // Store sanitized 'keterangan'
        'tglSurat' => $validatedData['tglSurat'],
        'ttd' => $validatedData['ttd'],
        'namaTtd' => $validatedData['namaTtd'],
        'jeniskelamin' => $validatedData['jenisKelamin'], // Store gender
    ]);

    return redirect('/dashboard/usaha')->with('success', 'Surat usaha dengan nomor ' . $validatedData['noSurat'] . ' berhasil ditambahkan!');
}

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usaha  $usaha
     * @return \Illuminate\Http\Response
     */
    public function show(Usaha $usaha)
    {
        return view('dashboard.usahas.show', [
            'title' => 'Usaha',
            'active' => 'usaha',
            'usaha' => $usaha,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usaha  $usaha
     * @return \Illuminate\Http\Response
     */
    public function edit(Usaha $usaha)
    {
        return view('dashboard.usahas.edit', [
            'title' => 'Usaha',
            'usaha' => $usaha,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usaha  $usaha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usaha $usaha)
    {

    
        // Define validation rules
        $rules = [
            'kodeSurat' => 'required|numeric',
            'nama' => 'required|max:255',
            'nik' => 'required|numeric',
            'tempatTglLahir' => 'required|max:255',
            'pekerjaan' => 'required|max:255',
            'alamat' => 'required|max:255',
            'namaUsaha' => 'required|max:255',
            'jenisUsaha' => 'required|max:255',
            'alamatUsaha' => 'required|max:255',
            'mulaiBerdiri' => 'required|date',
            'keterangan' => 'required',
            'tglSurat' => 'required|date',
            'ttd' => 'required|max:255',
            'namaTtd' => 'required|max:255',
        ];
    
        // Conditionally validate 'noSurat' if it has changed
        if ($request->noSurat != $usaha->noSurat) {
            $rules['noSurat'] = 'required|numeric|unique:usahas,noSurat,' . $usaha->id;
        }
    
        // Validate the request data
        $validatedData = $request->validate($rules);
    
        // Debug untuk memastikan data setelah validasi
        dd('Data setelah validasi:', $validatedData);
    
        // Handle file upload for 'ttdscan' if it exists
        if ($request->hasFile('ttdscan')) {
            // Delete the existing file if one exists
            if ($usaha->ttdscan && Storage::exists($usaha->ttdscan)) {
                Storage::delete($usaha->ttdscan);
            }
            // Store the new 'ttdscan' file
            $validatedData['ttdscan'] = $request->file('ttdscan')->store('ttdscan', 'public');
        }
    
        // Debug untuk memastikan data akhir sebelum update
        dd('Data sebelum update model:', $validatedData);
    
        // Update the Usaha model with validated data
        $usaha->update($validatedData);
    
        // Debug untuk memastikan setelah model diperbarui
        dd('Data setelah update:', $usaha);
    
        // Redirect with success message
        return redirect('/dashboard/surat-usaha')->with('success', 'Surat Keterangan Usaha berhasil diperbarui.');
    }
    
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usaha  $usaha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usaha $usaha)
    {
        Usaha::destroy($usaha->id);

        return redirect('/dashboard/usaha')->with('success', 'Surat berhasil dihapus!');
    }

    public function cetak(Usaha $usaha)
    {
        $pdf = PDF::loadview('dashboard.usahas.cetak', [
            'title' => 'Cetak',
            'usaha' => $usaha,
        ])->setPaper('a4', 'potrait');
        return $pdf->stream('Usaha_' . $usaha->noSurat . '.pdf');
    }
}
