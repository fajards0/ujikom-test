@extends('adminlayout.layout')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Daftar Gambar Film</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <a href="{{ route('images.create') }}" class="btn btn-primary m-3">Tambah Gambar</a>

            @if(session('success'))
                <div class="alert alert-success mx-3">{{ session('success') }}</div>
            @endif

            <table class="table align-items-center mb-0">
              <thead>
                <tr class="text-center">
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Film</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dibuat</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($movieImages as $image)
                <tr class="text-center">
                  <td>
                    <span class="badge badge-sm bg-gradient-info">
                      {{ $image->movie->title }}
                    </span>
                  </td>
                  <td>
                    <img src="{{ asset('storage/' . $image->image_url) }}" width="100" class="img-thumbnail">
                  </td>
                  <td>
                    <span class="text-secondary text-xs font-weight-bold">{{ $image->created_at->format('d/m/Y') }}</span>
                  </td>
                  <td>
                    <a href="{{ route('images.show', $image->id) }}" class="btn btn-info btn-sm" data-toggle="tooltip" title="Lihat Detail">
                      Detail
                    </a>

                    <a href="{{ route('images.edit', $image->id) }}" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Edit Gambar">
                      Edit
                    </a>

                    <form action="{{ route('images.destroy', $image->id) }}" method="POST" style="display:inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">
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
