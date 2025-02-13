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
                        <div class="mb-3">
                            <label class="form-label fw-bold">Judul Film</label>
                            <input type="text" name="title" id="title" class="form-control border-2 border-gray-500 rounded-2 p-2"
                                placeholder="Masukkan judul film" value="{{ $movie->title }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control border-2 border-gray-500 rounded-2 p-2"
                                placeholder="Slug otomatis dihasilkan" value="{{ $movie->slug }}" required readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Genre</label>
                            <select name="genre_id" class="form-select border-2 border-gray-500 rounded-2 p-2" required>
                                @foreach($genres as $genre)
                                    <option value="{{ $genre->id }}" {{ $movie->genre_id == $genre->id ? 'selected' : '' }}>
                                        {{ $genre->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Deskripsi</label>
                            <textarea name="description" class="form-control border-2 border-gray-500 rounded-2 p-2" rows="4" required>{{ $movie->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Tanggal Rilis</label>
                            <input type="date" name="release_date" class="form-control border-2 border-gray-500 rounded-2 p-2"
                                value="{{ $movie->release_date }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Durasi (menit)</label>
                            <input type="number" name="duration" class="form-control border-2 border-gray-500 rounded-2 p-2"
                                value="{{ $movie->duration }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Rating</label>
                            <input type="number" step="0.1" name="rating" class="form-control border-2 border-gray-500 rounded-2 p-2"
                                value="{{ $movie->rating }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Poster</label>
                            <input type="file" name="poster" class="form-control border-2 border-gray-500 rounded-2 p-2">
                            @if($movie->poster)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $movie->poster) }}" alt="Poster Film" width="100">
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Trailer URL</label>
                            <input type="url" name="trailer_url" class="form-control border-2 border-gray-500 rounded-2 p-2"
                                value="{{ $movie->trailer_url }}">
                        </div>
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
document.getElementById('title').addEventListener('input', function() {
    let slug = this.value.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '');
    document.getElementById('slug').value = slug;
});
</script>

@endsection
