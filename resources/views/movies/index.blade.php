@extends('adminlayout.layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Daftar Film</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <a href="{{ route('movies.create') }}" class="btn btn-primary m-3">Tambah Film</a>

                        @if (session('success'))
                            <div class="alert alert-success mx-3">{{ session('success') }}</div>
                        @endif

                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr class="text-center">
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Poster
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Genre
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Durasi
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Rating
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal
                                        Rilis</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($movies as $movie)
                                    <tr class="text-center">
                                        <td>
                                            <img src="{{ asset('storage/' . $movie->poster) }}" alt="Poster"
                                                class="img-thumbnail" width="80">

                                        </td>
                                        <td>
                                            <h6 class="mb-0 text-sm">{{ $movie->title }}</h6>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">
                                                {{ $movie->genres->pluck('name')->join(', ') }}
                                            </p>
                                        </td>
                                        <td>
                                            <span class="badge badge-sm bg-gradient-info">
                                                {{ $movie->duration }} menit
                                            </span>
                                        </td>
                                        <td>
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ $movie->rating }}/10</span>
                                        </td>
                                        <td>
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ $movie->release_date }}</span>
                                        </td>
                                        <td>
                                            <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-info btn-sm"
                                                data-toggle="tooltip" title="Lihat Detail">
                                                Detail
                                            </a>

                                            <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-warning btn-sm"
                                                data-toggle="tooltip" title="Edit Film">
                                                Edit
                                            </a>

                                            <form action="{{ route('movies.destroy', $movie->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Yakin ingin menghapus?')">
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
