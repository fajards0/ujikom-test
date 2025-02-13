@extends('adminlayout.layout')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Daftar Genre</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <a href="{{ route('genres.create') }}" class="btn btn-primary m-3">Tambah Genre</a>

            @if(session('success'))
                <div class="alert alert-success mx-3">{{ session('success') }}</div>
            @endif

            <table class="table align-items-center mb-0">
              <thead>
                <tr class="text-center">
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Genre</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Slug</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dibuat</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($genres as $genre)
                <tr class="text-center">
                  <td>
                    <h6 class="mb-0 text-sm">{{ $genre->name }}</h6>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $genre->slug }}</p>
                  </td>
                  <td>
                    <span class="text-secondary text-xs font-weight-bold">{{ $genre->created_at->format('d/m/Y') }}</span>
                  </td>
                  <td>
                    <a href="{{ route('genres.show', $genre->id) }}" class="btn btn-info btn-sm" data-toggle="tooltip" title="Lihat Detail">
                      Detail
                    </a>

                    <a href="{{ route('genres.edit', $genre->id) }}" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Edit Genre">
                      Edit
                    </a>

                    <form action="{{ route('genres.destroy', $genre->id) }}" method="POST" style="display:inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus genre ini?')">
                        Hapus
                      </button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
</div>
@endsection
