@extends('adminlayout.dashboard')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-secondary text-white text-center">
                    <h4 class="mb-0 text-white">Detail Film</h4>
                </div>
                <div class="card-body p-5">

                    <!-- Alert jika film sudah ditambahkan ke favorit -->
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="mb-3">
                        <label class="form-label fw-bold">Judul Film</label>
                        <input type="text" class="form-control border-2 border-gray-500 rounded-2 p-2"
                               value="{{ $movie->title }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Slug</label>
                        <input type="text" class="form-control border-2 border-gray-500 rounded-2 p-2"
                            value="{{ $movie->slug }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Genre</label>
                        <input type="text" class="form-control border-2 border-gray-500 rounded-2 p-2"
                               value="{{ $movie->genre->name }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Deskripsi</label>
                        <textarea class="form-control border-2 border-gray-500 rounded-2 p-2" rows="4" disabled>{{ $movie->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Tanggal Rilis</label>
                        <input type="text" class="form-control border-2 border-gray-500 rounded-2 p-2"
                               value="{{ $movie->release_date }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Durasi (menit)</label>
                        <input type="text" class="form-control border-2 border-gray-500 rounded-2 p-2"
                               value="{{ $movie->duration }} menit" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Rating</label>
                        <input type="text" class="form-control border-2 border-gray-500 rounded-2 p-2"
                               value="{{ $movie->rating }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Poster</label>
                        <div>
                            <img src="{{ asset('storage/' . $movie->poster) }}" alt="Poster Film" class="img-fluid rounded" width="200">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Trailer</label>
                        <div>
                            <a href="{{ $movie->trailer_url }}" target="_blank" class="btn btn-primary">Lihat Trailer</a>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('movies.index') }}" class="btn btn-outline-secondary px-4">Kembali</a>
                        <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-dark px-4">Edit</a>
                    </div>

                    <!-- Tombol Tambah ke Favorit -->
                    <div class="mt-4 text-center">
                        @if(!$movie->favorites()->where('user_id', auth()->id())->exists())
                            <form action="{{ route('favorites.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="movie_id" value="{{ $movie->id }}">
                                <button type="submit" class="btn btn-success px-4">Tambah ke Favorit ❤️</button>
                            </form>
                        @else
                            <button class="btn btn-outline-danger px-4" disabled>Sudah di Favorit ❤️</button>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
