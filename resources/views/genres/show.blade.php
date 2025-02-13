@extends('adminlayout.dashboard')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-secondary text-white text-center">
                    <h4 class="mb-0 text-white">Detail Genre</h4>
                </div>
                <div class="card-body p-5">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Genre</label>
                        <input type="text" class="form-control border-2 border-gray-500 rounded-2 p-2" value="{{ $genre->name }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Slug</label>
                        <input type="text" class="form-control border-2 border-gray-500 rounded-2 p-2" value="{{ $genre->slug }}" disabled>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('genres.index') }}" class="btn btn-outline-secondary px-4">Kembali</a>
                        <a href="{{ route('genres.edit', $genre->id) }}" class="btn btn-dark px-4">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
