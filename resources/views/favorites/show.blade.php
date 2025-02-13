@extends('adminlayout.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card my-4 shadow-lg border-0 rounded-3">
            <div class="card-header bg-gradient-dark text-white text-center">
                <h4 class="mb-0 text-white">Detail Favorit Film</h4>
            </div>
            <div class="card-body p-4">
                <!-- Menampilkan Nama Film -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Film</label>
                    <input type="text" class="form-control" value="{{ $favorite->movie->title }}" disabled>
                </div>

                <!-- Menampilkan Nama Pengguna yang Menambahkan Favorit -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Pengguna</label>
                    <input type="text" class="form-control" value="{{ $favorite->user->name }}" disabled>
                </div>

                <!-- Menampilkan Tanggal Ditambahkan -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Ditambahkan pada</label>
                    <input type="text" class="form-control" value="{{ $favorite->created_at->format('d M Y') }}" disabled>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('favorites.index') }}" class="btn btn-outline-secondary px-4">Kembali</a>

                    <form action="{{ route('favorites.destroy', $favorite->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus film dari favorit?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger px-4">Hapus Favorit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
