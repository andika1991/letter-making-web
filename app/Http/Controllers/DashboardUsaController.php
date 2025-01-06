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
            'keterangan' => 'required|max:255',
            'tglSurat' => 'required|date',
            'ttd' => 'required|max:255',
            'ttdscan' => 'required', // Validasi untuk file gambar
            'namaTtd' => 'required|max:255',
        ]);
    
        // Simpan file ttdscan ke storage/public/ttdscan
        if ($request->hasFile('ttdscan')) {
            $file = $request->file('ttdscan');
            $filePath = $file->store('ttdscan', 'public'); // Menyimpan ke disk 'public'
            $validatedData['ttdscan'] = $filePath; // Menyimpan path file ke database
        }
    
        // Membuat hash unik untuk QR Code
        $kodeSurat = $validatedData['kodeSurat'];
        $noSurat = $validatedData['noSurat'];
        $tahun = date('Y');
    
        // Gabungkan data untuk hashing
        $hashString = $kodeSurat . $noSurat . $tahun . now();
        $uniqueHash = hash('sha256', $hashString); // Hash menggunakan SHA-256
    
        // Simpan hash ke dalam data yang akan disimpan
        $validatedData['hash'] = $uniqueHash;
    
        // Buat URL lengkap untuk QR Code (misalnya: namaweb/surat/{hash})
        $url = url("/surat/{$uniqueHash}");
    
        // Generate QR Code dengan URL lengkap
        $qrCodePath = "qrcodes/{$uniqueHash}.png";
    
        // Pastikan folder public/qrcodes ada
        if (!file_exists(public_path('qrcodes'))) {
            mkdir(public_path('qrcodes'), 0755, true);
        }
    
        $options = new QROptions([
            'outputType' => QRCode::OUTPUT_IMAGE_PNG,
            'eccLevel' => QRCode::ECC_L,
            'imageBase64' => false,
        ]);
    
        $qrcode = new QRCode($options);
        $qrcode->render($url, public_path($qrCodePath));
    
        // Tambahkan path QR Code ke data yang akan disimpan
        $validatedData['qrcode'] = $qrCodePath;
    
        // Simpan data ke database
        Usaha::create($validatedData);
    
        return redirect('/dashboard/usaha')->with('success', 'Surat berhasil ditambahkan!');
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
