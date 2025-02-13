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
                            <input type="text" id="title" name="title" class="form-control border-2 border-gray-500 rounded-2 p-2" placeholder="Masukkan judul film" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control border-2 border-gray-500 rounded-2 p-2" placeholder="Slug akan otomatis terisi" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Genre</label>
                            <select name="genre_id" class="form-select border-2 border-gray-500 rounded-2 p-2" required>
                                <option value="">Pilih Genre</option>
                                @foreach($genres as $genre)
                                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Deskripsi</label>
                            <textarea name="description" class="form-control border-2 border-gray-500 rounded-2 p-2" rows="4" placeholder="Masukkan deskripsi film" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Tanggal Rilis</label>
                            <input type="date" name="release_date" class="form-control border-2 border-gray-500 rounded-2 p-2" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Durasi (menit)</label>
                            <input type="number" name="duration" class="form-control border-2 border-gray-500 rounded-2 p-2" placeholder="Masukkan durasi film dalam menit" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Rating</label>
                            <input type="number" step="0.1" name="rating" class="form-control border-2 border-gray-500 rounded-2 p-2" placeholder="Masukkan rating film (0-10)" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Poster</label>
                            <input type="file" name="poster" class="form-control border-2 border-gray-500 rounded-2 p-2">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Trailer URL</label>
                            <input type="url" name="trailer_url" class="form-control border-2 border-gray-500 rounded-2 p-2" placeholder="Masukkan URL trailer (opsional)">
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('movies.index') }}" class="btn btn-outline-secondary px-4">Batal</a>
                            <button type="submit" class="btn btn-dark px-4">Simpan</button>
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
                        .replace(/\s+/g, '-')  // Ganti spasi dengan -
                        .replace(/[^\w-]+/g, '')  // Hapus karakter khusus
                        .replace(/--+/g, '-'); // Hindari dua tanda - berurutan
        document.getElementById('slug').value = slug;
    });
</script>
@endsection
