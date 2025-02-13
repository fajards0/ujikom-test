@extends('adminlayout.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card my-4 shadow-lg border-0 rounded-3">
            <div class="card-header bg-gradient-dark text-white text-center">
                <h4 class="mb-0 text-white">Detail Ulasan Film</h4>
            </div>
            <div class="card-body p-4">
                <!-- Menampilkan Nama Film -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Film</label>
                    <input type="text" class="form-control" value="{{ $review->movie->title }}" disabled>
                </div>

                <!-- Menampilkan Nama Pengguna yang Memberi Ulasan -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Pengguna</label>
                    <input type="text" class="form-control" value="{{ $review->user->name }}" disabled>
                </div>

                <!-- Menampilkan Rating -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Rating</label>
                    <input type="text" class="form-control" value="{{ $review->rating }} / 5" disabled>
                </div>

                <!-- Menampilkan Komentar -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Ulasan</label>
                    <textarea class="form-control" rows="4" disabled>{{ $review->comment }}</textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('reviews.index') }}" class="btn btn-outline-secondary px-4">Kembali</a>
                    <a href="{{ route('reviews.edit', $review->id) }}" class="btn btn-dark px-4">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
