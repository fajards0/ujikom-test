@extends('layout.layout')

@section('content')
    <div class="page-content">
        <!-- 404 Area Start -->
        <section class="signup text-center">
            <div class="container-fluid">
                <div class="signup-block">
                    <h1 class="color-white mb-32">Register</h1>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-32">
                            <input id="name" type="text"
                                class="form-control @error('name') is-invalid @enderror mb-32" name="name" placeholder="Enter name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-32">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" placeholder="Enter email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-32">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter password" required
                                autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-32">
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
                        </div>
                        <div class="text-center">
                            <button class="cus-btn primary mb-32">Sign up</button>
                        </div>
                    </form>
                    <div class="text-center">
                        <p class="sec color-gray mb-32">
                            By continuing, you agree to ZAAY Terms of Use and Privacy Policy.
                        </p>

                        <h6>Already have an account? <a href="{{ url('/login') }}" class="color-primary">Login</a></h6>
                    </div>
                </div>
            </div>
        </section>
        <!-- 404 Area end -->
    </div>
@endsection
