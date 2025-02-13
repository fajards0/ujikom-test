@extends('adminlayout.layout')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-secondary text-white text-center">
                    <h4 class="mb-0 text-white">Tambah Pemeran Film</h4>
                </div>
                <div class="card-body p-5">
                    <form action="{{ route('casts.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-bold">Film</label>
                            <select name="movie_id" class="form-select border-2 border-gray-500 rounded-2 p-2" required>
                                <option value="">Pilih Film</option>
                                @foreach($movies as $movie)
                                    <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Pemeran</label>
                            <input type="text" name="name" class="form-control border-2 border-gray-500 rounded-2 p-2" placeholder="Masukkan nama pemeran" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Peran</label>
                            <input type="text" name="role" class="form-control border-2 border-gray-500 rounded-2 p-2" placeholder="Masukkan nama peran" required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('casts.index') }}" class="btn btn-outline-secondary px-4">Batal</a>
                            <button type="submit" class="btn btn-dark px-4">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
