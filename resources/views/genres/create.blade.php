@extends('adminlayout.layout')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-secondary text-white text-center">
                    <h4 class="mb-0 text-white">Tambah Genre</h4>
                </div>
                <div class="card-body p-5">
                    <form action="{{ route('genres.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Genre</label>
                            <input type="text" name="name" id="name" class="form-control border-2 border-gray-500 rounded-2 p-2" placeholder="Masukkan nama genre" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control border-2 border-gray-500 rounded-2 p-2" placeholder="Slug akan otomatis terisi" readonly>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('genres.index') }}" class="btn btn-outline-secondary px-4">Batal</a>
                            <button type="submit" class="btn btn-dark px-4">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('name').addEventListener('input', function() {
        let name = this.value;
        let slug = name.toLowerCase().replace(/\s+/g, '-').replace(/[^a-z0-9-]/g, '');
        document.getElementById('slug').value = slug;
    });
</script>
@endsection
