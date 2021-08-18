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
                <h2 class="logo">Boolgram</h2>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="username" placeholder="Enter your username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn btn-primary">Accedi</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
