@extends('adminlayout.layout')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Daftar Profil Pengguna</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <a href="{{ route('profiles.create') }}" class="btn btn-primary m-3">Tambah Profil</a>

                    @if(session('success'))
                        <div class="alert alert-success mx-3">{{ session('success') }}</div>
                    @endif

                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr class="text-center">
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Telepon</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Lahir</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Foto Profil</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($profiles as $profile)
                            <tr class="text-center">
                                <td>
                                    <h6 class="mb-0 text-sm">{{ $profile->user->name }}</h6>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{ $profile->phone ?? '-' }}</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{ $profile->address ?? '-' }}</p>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">
                                        {{ $profile->birthdate ? \Carbon\Carbon::parse($profile->birthdate)->format('d/m/Y') : '-' }}
                                    </span>
                                </td>
                                <td>
                                    @if ($profile->profile_picture)
                                        <img src="{{ asset('storage/' . $profile->profile_picture) }}" width="50" class="rounded-circle">
                                    @else
                                        <span>-</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('profiles.show', $profile->id) }}" class="btn btn-info btn-sm" data-toggle="tooltip" title="Lihat Detail">
                                        Detail
                                    </a>

                                    <a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Edit Profil">
                                        Edit
                                    </a>

                                    @if($profile->user_id !== auth()->id())
                                    <form action="{{ route('profiles.destroy', $profile->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus profil ini?')">
                                            Hapus
                                        </button>
                                    </form>
                                    @else
                                        <button class="btn btn-secondary btn-sm" disabled>
                                            Hapus
                                        </button>
                                    @endif
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
