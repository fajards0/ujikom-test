@extends('adminlayout.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card my-4 shadow-lg border-0 rounded-3">
            <div class="card-header bg-gradient-dark text-white text-center">
                <h4 class="mb-0 text-white">Edit Gambar Film</h4>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('images.update', $movieImage->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label fw-bold">Film</label>
                        <select name="movie_id" class="form-select" required>
                            @foreach($movies as $movie)
                                <option value="{{ $movie->id }}" {{ $movieImage->movie_id == $movie->id ? 'selected' : '' }}>
                                    {{ $movie->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Gambar Saat Ini</label>
                        <div>
                            <img src="{{ asset('storage/' . $movieImage->image_url) }}" class="img-fluid rounded" width="200">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Unggah Gambar Baru</label>
                        <input type="file" name="image_url" class="form-control">
                        <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar.</small>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('images.index') }}" class="btn btn-outline-secondary px-4">Batal</a>
                        <button type="submit" class="btn btn-dark px-4">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
