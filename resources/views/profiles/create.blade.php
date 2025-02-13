@extends('adminlayout.layout')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-secondary text-white text-center">
                    <h4 class="mb-0 text-white">Tambah Profil</h4>
                </div>
                <div class="card-body p-5">
                    <form action="{{ route('profiles.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nomor Telepon</label>
                            <input type="text" name="phone" class="form-control" placeholder="Masukkan nomor telepon">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Alamat</label>
                            <textarea name="address" class="form-control" placeholder="Masukkan alamat"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Tanggal Lahir</label>
                            <input type="date" name="birthdate" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Foto Profil</label>
                            <input type="file" name="profile_picture" class="form-control">
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('profiles.index') }}" class="btn btn-outline-secondary px-4">Batal</a>
                            <button type="submit" class="btn btn-dark px-4">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
