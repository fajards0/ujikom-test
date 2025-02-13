@extends('adminlayout.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card my-4 shadow-lg border-0 rounded-3">
            <div class="card-header bg-gradient-dark text-white text-center">
                <h4 class="mb-0 text-white">Detail Pemeran Film</h4>
            </div>
            <div class="card-body p-4">
                <div class="mb-3">
                    <label class="form-label fw-bold">Film</label>
                    <input type="text" class="form-control" value="{{ $cast->movie->title }}" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Nama Pemeran</label>
                    <input type="text" class="form-control" value="{{ $cast->name }}" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Peran</label>
                    <input type="text" class="form-control" value="{{ $cast->role }}" disabled>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('casts.index') }}" class="btn btn-outline-secondary px-4">Kembali</a>
                    <a href="{{ route('casts.edit', $cast->id) }}" class="btn btn-dark px-4">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
