@extends('adminlayout.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card my-4 shadow-lg border-0 rounded-3">
            <div class="card-header bg-gradient-dark text-white text-center">
                <h4 class="mb-0 text-white">Edit Pemeran Film</h4>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('casts.update', $cast->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label fw-bold">Film</label>
                        <select name="movie_id" class="form-select" required>
                            @foreach($movies as $movie)
                                <option value="{{ $movie->id }}" {{ $cast->movie_id == $movie->id ? 'selected' : '' }}>
                                    {{ $movie->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Pemeran</label>
                        <input type="text" name="name" class="form-control"
                            placeholder="Masukkan nama pemeran" value="{{ $cast->name }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Peran</label>
                        <input type="text" name="role" class="form-control"
                            placeholder="Masukkan nama peran" value="{{ $cast->role }}" required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('casts.index') }}" class="btn btn-outline-secondary px-4">Batal</a>
                        <button type="submit" class="btn btn-dark px-4">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
