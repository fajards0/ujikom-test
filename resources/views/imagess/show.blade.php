@extends('adminlayout.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card my-4 shadow-lg border-0 rounded-3">
            <div class="card-header bg-gradient-dark text-white text-center">
                <h4 class="mb-0 text-white">Detail Gambar Film</h4>
            </div>
            <div class="card-body p-4">
                <div class="mb-3">
                    <label class="form-label fw-bold">Film</label>
                    <input type="text" class="form-control" value="{{ $movieImage->movie->title }}" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Gambar</label>
                    <div class="text-center">
                        @if($movieImage->image_url)
                            <img src="{{ asset('storage/' . $movieImage->image_url) }}" class="img-fluid rounded" width="300">
                        @else
                            <p class="text-muted">Tidak ada gambar tersedia.</p>
                        @endif
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('images.index') }}" class="btn btn-outline-secondary px-4">Kembali</a>
                    <a href="{{ route('images.edit', $movieImage->id) }}" class="btn btn-dark px-4">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
