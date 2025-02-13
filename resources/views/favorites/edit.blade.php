@extends('adminlayout.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card my-4 shadow-lg border-0 rounded-3">
            <div class="card-header bg-gradient-dark text-white text-center">
                <h4 class="mb-0 text-white">Edit Ulasan Film</h4>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('reviews.update', $review->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Menampilkan Judul Film (Non-editable) -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">Film</label>
                        <input type="text" class="form-control" value="{{ $review->movie->title }}" disabled>
                    </div>

                    <!-- Menampilkan Nama Pengguna (Non-editable) -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">Pengguna</label>
                        <input type="text" class="form-control" value="{{ $review->user->name }}" disabled>
                    </div>

                    <!-- Input untuk Rating -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">Rating</label>
                        <input type="number" name="rating" class="form-control"
                            placeholder="Masukkan rating (1-5)" value="{{ old('rating', $review->rating) }}" required min="1" max="5">
                    </div>

                    <!-- Input untuk Komentar -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">Ulasan</label>
                        <textarea name="comment" class="form-control" rows="4" required>{{ old('comment', $review->comment) }}</textarea>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('reviews.index') }}" class="btn btn-outline-secondary px-4">Batal</a>
                        <button type="submit" class="btn btn-dark px-4">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
