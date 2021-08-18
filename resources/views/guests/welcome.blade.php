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
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="username" placeholder="Enter your username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn form-control">Login</button>
                </form>
                <div class="d-flex justify-content-center align-items-center mt-2">
                    <div class="separator"></div>
                    <span class="o">o</span>
                    <div class="separator"></div>
                </div>
                <a href="#" class="mt-2 d-flex justify-content-center align-items-center font-weight-bold">
                    <i class="fab fa-facebook-square"></i>
                    Accedi con Facebook
                </a>
                <a href="#" class="fs-12 mt-3">
                    Hai dimenticato la password ?
                </a>
            </div>
            <div class="card justify-content-center flex-row mt-2">
                <span>Non hai un account ?</span>
                <a href="#" class="ml-2 text-primary font-weight-bold">Iscriviti</a>
            </div>
            <span class="d-block w-100 text-center mt-3">Scarica l'applicazione.</span>
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
