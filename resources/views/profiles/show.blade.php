@extends('adminlayout.dashboard')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-secondary text-white text-center">
                    <h4 class="mb-0 text-white">Profil Saya</h4>
                </div>
                <div class="card-body p-5">
                    <div class="text-center mb-4">
                        @if(Auth::user()->profile && Auth::user()->profile->profile_picture)
                            <img src="{{ asset('storage/' . Auth::user()->profile->profile_picture) }}" class="rounded-circle" width="150" height="150">
                        @else
                            <img src="{{ asset('images/default-profile.png') }}" class="rounded-circle" width="150" height="150">
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama</label>
                        <input type="text" class="form-control border-2 border-gray-500 rounded-2 p-2" value="{{ Auth::user()->name }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control border-2 border-gray-500 rounded-2 p-2" value="{{ Auth::user()->email }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Role</label>
                        <input type="text" class="form-control border-2 border-gray-500 rounded-2 p-2" value="{{ ucfirst(Auth::user()->role) }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Telepon</label>
                        <input type="text" class="form-control border-2 border-gray-500 rounded-2 p-2" value="{{ Auth::user()->profile->phone ?? '-' }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Alamat</label>
                        <textarea class="form-control border-2 border-gray-500 rounded-2 p-2" rows="3" disabled>{{ Auth::user()->profile->address ?? '-' }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Tanggal Lahir</label>
                        <input type="text" class="form-control border-2 border-gray-500 rounded-2 p-2" value="{{ Auth::user()->profile->birthdate ? \Carbon\Carbon::parse(Auth::user()->profile->birthdate)->format('d/m/Y') : '-' }}" disabled>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('profiles.index') }}" class="btn btn-outline-secondary px-4">Kembali</a>
                        <a href="{{ route('profiles.edit', Auth::user()->id) }}" class="btn btn-warning px-4 ms-3">Edit Profil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
