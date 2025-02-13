@extends('adminlayout.layout')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Daftar Review Film</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <a href="{{ route('reviews.create') }}" class="btn btn-primary m-3">Tambah Review</a>

                    @if(session('success'))
                        <div class="alert alert-success mx-3">{{ session('success') }}</div>
                    @endif

                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr class="text-center">
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Film</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">User</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Rating</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Komentar</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dibuat</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reviews as $review)
                                <tr class="text-center">
                                    <td>
                                        <span class="badge badge-sm bg-gradient-info">
                                            {{ $review->movie->title }}
                                        </span>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-sm">{{ $review->user->name }}</h6>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $review->rating }}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs mb-0">{{ Str::limit($review->comment, 50) }}</p>
                                    </td>
                                    <td>
                                        <span class="text-secondary text-xs font-weight-bold">{{ $review->created_at->format('d/m/Y') }}</span>
                                    </td>
                                    <td>
                                        <a href="{{ route('reviews.show', $review->id) }}" class="btn btn-info btn-sm" data-toggle="tooltip" title="Lihat Detail">
                                            Detail
                                        </a>
                                        <a href="{{ route('reviews.edit', $review->id) }}" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Edit Review">
                                            Edit
                                        </a>
                                        <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" style="display:inline;">
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
                    <div class="m-3">
                        {{ $reviews->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
