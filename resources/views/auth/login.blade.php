@extends('layouts.app')

@section('content')
<div class="container">
    <div class="welcome">
        <div class="left">
            <div class="phones">
                <img src="https://www.instagram.com/static/images/homepage/screenshot5.jpg/0a2d3016f375.jpg" alt="">
            </div>
        </div>
        <div class="right">
            <div class="card text-center">
                <h2 class="logo mb-4">Boolgram</h2>
                <form method="POST" action="{{ Route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" placeholder="Enter your email" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter your password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn form-control">Log In</button>
                </form>
                <div class="d-flex justify-content-center align-items-center mt-2">
                    <div class="separator"></div>
                    <span class="o">o</span>
                    <div class="separator"></div>
                </div>
                <a href="#" class="mt-2 d-flex justify-content-center align-items-center font-weight-bold">
                    <i class="fab fa-facebook-square"></i>
                    Sign in with Facebook
                </a>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="fs-12 mt-3">
                        Forgot password ?
                    </a>
                @endif
            </div>
            <div class="card justify-content-center flex-row mt-2">
                <span>Don't have an account ?</span>
                <a href="#" class="ml-2 text-primary font-weight-bold">Signup</a>
            </div>
            <span class="d-block w-100 text-center mt-3">Get the app.</span>
            <div class="d-flex justify-content-center mt-3">
                <a href="#">
                    <img src="https://www.instagram.com/static/images/appstore-install-badges/badge_ios_italian-it.png/9078ec632936.png" alt="iOS appstore" height="40">
                </a>
                <a href="#">
                    <img src="https://www.instagram.com/static/images/appstore-install-badges/badge_android_italian-it.png/a27e4240699a.png" class="ml-2" alt="Google appstore" height="40">
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
