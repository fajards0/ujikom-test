@extends('adminlayout.layout')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Daftar Film Favorit</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">

                    @if(session('success'))
                        <div class="alert alert-success mx-3">{{ session('success') }}</div>
                    @endif
                    @if(session('warning'))
                        <div class="alert alert-warning mx-3">{{ session('warning') }}</div>
                    @endif

                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr class="text-center">
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Film</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Ditambahkan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($favorites as $favorite)
                                <tr class="text-center">
                                    <td>
                                        <span class="badge badge-sm bg-gradient-info">
                                            {{ $favorite->movie->title }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-secondary text-xs font-weight-bold">{{ $favorite->created_at->format('d/m/Y') }}</span>
                                    </td>
                                    <td>
                                        <form action="{{ route('favorites.destroy', $favorite->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus film dari favorit?')">
                                                Hapus dari Favorit
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="m-3">
                        {{ $favorites->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
