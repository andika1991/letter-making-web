@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded p-4">
                <h3 class="mb-4">Tambah Surat Izin Orang Tua</h3>

                <form action="{{ route('suratIzinOrtu.store') }}" method="POST">
                    @csrf

                    <!-- Nomor Surat -->
                    <div class="mb-3">
                        <label for="nomor_surat" class="form-label">No Surat</label>
                        <input type="text" class="form-control @error('nomor_surat') is-invalid @enderror" id="nomor_surat" name="nomor_surat" value="{{ old('nomor_surat') }}" required>
                        @error('nomor_surat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Keperluan -->
                    <div class="mb-3">
                        <label for="keperluan" class="form-label">Keperluan</label>
                        <input type="text" class="form-control @error('keperluan') is-invalid @enderror" id="keperluan" name="keperluan" value="{{ old('keperluan') }}" required>
                        @error('keperluan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Kepala Kampung -->
                    <div class="mb-3">
                        <label for="kepala_kampung" class="form-label">Nama Kepala Kampung</label>
                        <input type="text" class="form-control @error('kepala_kampung') is-invalid @enderror" id="kepala_kampung" name="kepala_kampung" value="{{ old('kepala_kampung') }}" required>
                        @error('kepala_kampung')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Data Pemberi Izin -->
                    <h5 class="mt-4">Data Pemberi Izin</h5>

                    <div class="mb-3">
                        <label for="pemberi_izin_role" class="form-label">Peran (Ayah, Ibu, Suami, Istri)</label>
                        <select class="form-control @error('pemberi_izin_role') is-invalid @enderror" id="pemberi_izin_role" name="pemberi_izin_role" required>
                            <option value="">-- Pilih Peran --</option>
                            <option value="Ayah" {{ old('pemberi_izin_role') == 'Ayah' ? 'selected' : '' }}>Ayah</option>
                            <option value="Ibu" {{ old('pemberi_izin_role') == 'Ibu' ? 'selected' : '' }}>Ibu</option>
                            <option value="Suami" {{ old('pemberi_izin_role') == 'Suami' ? 'selected' : '' }}>Suami</option>
                            <option value="Istri" {{ old('pemberi_izin_role') == 'Istri' ? 'selected' : '' }}>Istri</option>
                        </select>
                        @error('pemberi_izin_role')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="pemberi_izin_nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control @error('pemberi_izin_nama') is-invalid @enderror" id="pemberi_izin_nama" name="pemberi_izin_nama" value="{{ old('pemberi_izin_nama') }}" required>
                        @error('pemberi_izin_nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="pemberi_izin_tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control @error('pemberi_izin_tempat_lahir') is-invalid @enderror" id="pemberi_izin_tempat_lahir" name="pemberi_izin_tempat_lahir" value="{{ old('pemberi_izin_tempat_lahir') }}" required>
                        @error('pemberi_izin_tempat_lahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="pemberi_izin_tgl_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control @error('pemberi_izin_tgl_lahir') is-invalid @enderror" id="pemberi_izin_tgl_lahir" name="pemberi_izin_tgl_lahir" value="{{ old('pemberi_izin_tgl_lahir') }}" required>
                        @error('pemberi_izin_tgl_lahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="pemberi_izin_nik" class="form-label">NIK</label>
                        <input type="text" class="form-control @error('pemberi_izin_nik') is-invalid @enderror" id="pemberi_izin_nik" name="pemberi_izin_nik" value="{{ old('pemberi_izin_nik') }}">
                        @error('pemberi_izin_nik')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="pemberi_izin_jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-control @error('pemberi_izin_jenis_kelamin') is-invalid @enderror" id="pemberi_izin_jenis_kelamin" name="pemberi_izin_jenis_kelamin" required>
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="Laki-laki" {{ old('pemberi_izin_jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ old('pemberi_izin_jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('pemberi_izin_jenis_kelamin')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="pemberi_izin_agama" class="form-label">Agama</label>
                        <input type="text" class="form-control @error('pemberi_izin_agama') is-invalid @enderror" id="pemberi_izin_agama" name="pemberi_izin_agama" value="{{ old('pemberi_izin_agama') }}" required>
                        @error('pemberi_izin_agama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="pemberi_izin_pekerjaan" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control @error('pemberi_izin_pekerjaan') is-invalid @enderror" id="pemberi_izin_pekerjaan" name="pemberi_izin_pekerjaan" value="{{ old('pemberi_izin_pekerjaan') }}" required>
                        @error('pemberi_izin_pekerjaan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="pemberi_izin_alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control @error('pemberi_izin_alamat') is-invalid @enderror" id="pemberi_izin_alamat" name="pemberi_izin_alamat" value="{{ old('pemberi_izin_alamat') }}" required>
                        @error('pemberi_izin_alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Data Pemohon Izin -->
                    <h5 class="mt-4">Data Pemohon Izin</h5>

                    <div class="mb-3">
                        <label for="pemohon_izin_role" class="form-label">Peran (Anak, Suami, Istri)</label>
                        <select class="form-control @error('pemohon_izin_role') is-invalid @enderror" id="pemohon_izin_role" name="pemohon_izin_role" required>
                            <option value="">-- Pilih Peran --</option>
                            <option value="Anak" {{ old('pemohon_izin_role') == 'Anak' ? 'selected' : '' }}>Anak</option>
                            <option value="Suami" {{ old('pemohon_izin_role') == 'Suami' ? 'selected' : '' }}>Suami</option>
                            <option value="Istri" {{ old('pemohon_izin_role') == 'Istri' ? 'selected' : '' }}>Istri</option>
                        </select>
                        @error('pemohon_izin_role')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="pemohon_izin_nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control @error('pemohon_izin_nama') is-invalid @enderror" id="pemohon_izin_nama" name="pemohon_izin_nama" value="{{ old('pemohon_izin_nama') }}" required>
                        @error('pemohon_izin_nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="pemohon_izin_tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control @error('pemohon_izin_tempat_lahir') is-invalid @enderror" id="pemohon_izin_tempat_lahir" name="pemohon_izin_tempat_lahir" value="{{ old('pemohon_izin_tempat_lahir') }}" required>
                        @error('pemohon_izin_tempat_lahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="pemohon_izin_tgl_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control @error('pemohon_izin_tgl_lahir') is-invalid @enderror" id="pemohon_izin_tgl_lahir" name="pemohon_izin_tgl_lahir" value="{{ old('pemohon_izin_tgl_lahir') }}" required>
                        @error('pemohon_izin_tgl_lahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="pemohon_izin_nik" class="form-label">NIK</label>
                        <input type="text" class="form-control @error('pemohon_izin_nik') is-invalid @enderror" id="pemohon_izin_nik" name="pemohon_izin_nik" value="{{ old('pemohon_izin_nik') }}">
                        @error('pemohon_izin_nik')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="pemohon_izin_jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-control @error('pemohon_izin_jenis_kelamin') is-invalid @enderror" id="pemohon_izin_jenis_kelamin" name="pemohon_izin_jenis_kelamin" required>
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="Laki-laki" {{ old('pemohon_izin_jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ old('pemohon_izin_jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('pemohon_izin_jenis_kelamin')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="pemohon_izin_agama" class="form-label">Agama</label>
                        <input type="text" class="form-control @error('pemohon_izin_agama') is-invalid @enderror" id="pemohon_izin_agama" name="pemohon_izin_agama" value="{{ old('pemohon_izin_agama') }}" required>
                        @error('pemohon_izin_agama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="pemohon_izin_pekerjaan" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control @error('pemohon_izin_pekerjaan') is-invalid @enderror" id="pemohon_izin_pekerjaan" name="pemohon_izin_pekerjaan" value="{{ old('pemohon_izin_pekerjaan') }}" required>
                        @error('pemohon_izin_pekerjaan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="pemohon_izin_alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control @error('pemohon_izin_alamat') is-invalid @enderror" id="pemohon_izin_alamat" name="pemohon_izin_alamat" value="{{ old('pemohon_izin_alamat') }}" required>
                        @error('pemohon_izin_alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Simpan Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection