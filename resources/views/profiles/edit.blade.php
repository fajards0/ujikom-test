@extends('adminlayout.layout')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-secondary text-white text-center">
                    <h4 class="mb-0 text-white">Edit Profil</h4>
                </div>
                <div class="card-body p-5">
                    <form action="{{ route('profiles.update', auth()->user()->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama</label>
                            <input type="text" name="name" class="form-control border-2 border-gray-500 rounded-2 p-2"
                                value="{{ auth()->user()->name }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Email</label>
                            <input type="email" class="form-control border-2 border-gray-500 rounded-2 p-2"
                                value="{{ auth()->user()->email }}" disabled>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Nomor Telepon</label>
                            <input type="text" name="phone" class="form-control border-2 border-gray-500 rounded-2 p-2"
                                value="{{ auth()->user()->profile->phone ?? '' }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Alamat</label>
                            <textarea name="address" class="form-control border-2 border-gray-500 rounded-2 p-2">{{ auth()->user()->profile->address ?? '' }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Tanggal Lahir</label>
                            <input type="date" name="birthdate" class="form-control border-2 border-gray-500 rounded-2 p-2"
                                value="{{ auth()->user()->profile->birthdate ?? '' }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Foto Profil</label>
                            <input type="file" name="profile_picture" class="form-control border-2 border-gray-500 rounded-2 p-2">
                            @if(auth()->user()->profile && auth()->user()->profile->profile_picture)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . auth()->user()->profile->profile_picture) }}" alt="Profile Picture" width="100" class="rounded">
                                </div>
                            @endif
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('profiles.index') }}" class="btn btn-outline-secondary px-4">Batal</a>
                            <button type="submit" class="btn btn-dark px-4">Perbarui</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
