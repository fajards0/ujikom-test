@extends('adminlayout.layout')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-secondary text-white text-center">
                    <h4 class="mb-0 text-white">Tambah Review Film</h4>
                </div>
                <div class="card-body p-5">
                    <form action="{{ route('reviews.store') }}" method="POST">
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
                            <label class="form-label fw-bold">Rating</label>
                            <input type="number" name="rating" class="form-control border-2 border-gray-500 rounded-2 p-2" min="0" max="5" step="0.1" placeholder="Masukkan rating (0-5)" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Komentar</label>
                            <textarea name="comment" class="form-control border-2 border-gray-500 rounded-2 p-2" rows="4" placeholder="Tulis komentar review" required></textarea>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('reviews.index') }}" class="btn btn-outline-secondary px-4">Batal</a>
                            <button type="submit" class="btn btn-dark px-4">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
