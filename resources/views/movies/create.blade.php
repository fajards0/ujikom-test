@extends('adminlayout.layout')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-secondary text-white text-center">
                    <h4 class="mb-0 text-white">Tambah Film</h4>
                </div>
                <div class="card-body p-5">
                    <form action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-bold">Judul Film</label>
                            <input type="text" id="title" name="title" class="form-control" placeholder="Masukkan judul film" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control" placeholder="Slug akan otomatis terisi" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Genre</label>
                            <select name="genres[]" class="form-select" multiple required>
                                @foreach($genres as $genre)
                                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                @endforeach
                            </select>
                            <small class="text-muted">Gunakan Ctrl (Windows) atau Cmd (Mac) untuk memilih lebih dari satu genre.</small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Deskripsi</label>
                            <textarea name="description" class="form-control" rows="4" placeholder="Masukkan deskripsi film" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Tanggal Rilis</label>
                            <input type="date" name="release_date" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Durasi (menit)</label>
                            <input type="number" name="duration" class="form-control" placeholder="Masukkan durasi film dalam menit" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Rating</label>
                            <input type="number" step="0.1" name="rating" class="form-control" placeholder="Masukkan rating film (0-10)" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Poster</label>
                            <input type="file" name="poster" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Trailer URL</label>
                            <input type="url" name="trailer_url" class="form-control" placeholder="Masukkan URL trailer (opsional)">
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('movies.index') }}" class="btn btn-outline-secondary">Batal</a>
                            <button type="submit" class="btn btn-dark">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('title').addEventListener('input', function() {
        let title = this.value;
        let slug = title.toLowerCase()
                        .trim()
                        .replace(/\s+/g, '-')
                        .replace(/[^\w-]+/g, '')
                        .replace(/--+/g, '-');
        document.getElementById('slug').value = slug;
    });
</script>
@endsection
