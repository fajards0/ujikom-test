@extends('layout.layout')

@section('content')
    <div class="page-content">
        <!-- 404 Area Start -->
        <section class="signup text-center">
            <div class="container-fluid">
                <div class="signup-block">
                    <h1 class="color-white mb-32">Login</h1>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-32">
                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror mb-32" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-32">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror mb-32" name="password" required
                                autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="text-center">
                            <button class="cus-btn primary mb-32">Sign up</button>
                        </div>
                    </form>
                    <div class="text-center">
                        <p class="sec color-gray mb-32">
                            By continuing, you agree to ZAAY Terms of Use and Privacy Policy.
                        </p>
                        <h6>Already have an account? <a href="{{ url('/register') }}" class="color-primary">Register</a></h6>
                    </div>
                </div>
            </div>
        </section>
        <!-- 404 Area end -->
    </div>
@endsection
