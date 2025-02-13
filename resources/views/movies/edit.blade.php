@extends('adminlayout.layout')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-secondary text-white text-center">
                    <h4 class="mb-0 text-white">Edit Film</h4>
                </div>
                <div class="card-body p-5">
                    <form action="{{ route('movies.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        {{-- Judul Film --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">Judul Film</label>
                            <input type="text" name="title" id="title" class="form-control"
                                placeholder="Masukkan judul film" value="{{ old('title', $movie->title) }}" required>
                        </div>

                        {{-- Slug --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control"
                                value="{{ old('slug', $movie->slug) }}" required readonly>
                        </div>

                        {{-- Genre --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">Genre</label>
                            <select name="genres[]" class="form-select" multiple required>
                                @foreach($genres as $genre)
                                    <option value="{{ $genre->id }}"
                                        {{ in_array($genre->id, $movie->genres->pluck('id')->toArray()) ? 'selected' : '' }}>
                                        {{ $genre->name }}
                                    </option>
                                @endforeach
                            </select>
                            <small class="text-muted">Gunakan CTRL (Windows) atau CMD (Mac) untuk memilih lebih dari satu.</small>
                        </div>

                        {{-- Deskripsi --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">Deskripsi</label>
                            <textarea name="description" class="form-control" rows="4" required>{{ old('description', $movie->description) }}</textarea>
                        </div>

                        {{-- Tanggal Rilis --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">Tanggal Rilis</label>
                            <input type="date" name="release_date" class="form-control"
                                value="{{ old('release_date', $movie->release_date) }}" required>
                        </div>

                        {{-- Durasi --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">Durasi (menit)</label>
                            <input type="number" name="duration" class="form-control"
                                value="{{ old('duration', $movie->duration) }}" required>
                        </div>

                        {{-- Rating --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">Rating</label>
                            <input type="number" step="0.1" name="rating" class="form-control"
                                value="{{ old('rating', $movie->rating) }}" required>
                        </div>

                        {{-- Poster --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">Poster</label>
                            <input type="file" name="poster" class="form-control">
                            @if($movie->poster)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $movie->poster) }}" alt="Poster Film" class="img-thumbnail" width="120">
                                    <p class="text-muted">Poster saat ini</p>
                                </div>
                            @endif
                        </div>

                        {{-- Trailer URL --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">Trailer URL</label>
                            <input type="url" name="trailer_url" class="form-control"
                                value="{{ old('trailer_url', $movie->trailer_url) }}">
                        </div>

                        {{-- Tombol Submit --}}
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('movies.index') }}" class="btn btn-outline-secondary px-4">Batal</a>
                            <button type="submit" class="btn btn-dark px-4">Perbarui</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Slug otomatis dibuat dari Title
document.getElementById('title').addEventListener('input', function() {
    let slug = this.value.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '');
    document.getElementById('slug').value = slug;
});
</script>

@endsection
