@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content">
        <!-- Posts -->
        <div class="posts">
            <div class="card">
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum soluta consequuntur aliquid totam nostrum vel quos nulla, placeat numquam nesciunt.</span>
            </div>
        </div>
        <!-- /Posts -->

        <!-- Side -->
        <div class="side">
            <div>
                <div class="user d-flex justify-content-between align-items-center">
                    <div class="d-flex">
                        <i class="fas fa-circle"></i>
                        <div class="data ml-3">
                            <h6 class="font-weight-bold mb-0">{{ Auth::user()->name }}</h6>
                            <span>{{ Auth::user()->name }}</span>
                        </div>
                    </div>
                    <a href="#" class="text-primary font-weight-bold fs-12">
                        <span>Passa a</span>
                    </a>
                </div>
                <div class="suggestions mt-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="font-weight-bold" style="color: #7d7d7d">Suggerimenti per te</span>
                        <a href="#" class="fs-12">
                            <span>Mostra tutti</span>
                        </a>
                    </div>
                    <div class="users">
                        <div class="user d-flex justify-content-between align-items-center mt-2">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-circle"></i>
                                <div class="data ml-3">
                                    <h6 class="font-weight-bold mb-0">{{ Auth::user()->name }}</h6>
                                    <span>{{ Auth::user()->name }}</span>
                                </div>
                            </div>
                            <a href="#" class="text-primary font-weight-bold fs-12">
                                <span>Segui</span>
                            </a>
                        </div>
                        <div class="user d-flex justify-content-between align-items-center mt-2">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-circle"></i>
                                <div class="data ml-3">
                                    <h6 class="font-weight-bold mb-0">{{ Auth::user()->name }}</h6>
                                    <span>{{ Auth::user()->name }}</span>
                                </div>
                            </div>
                            <a href="#" class="text-primary font-weight-bold fs-12">
                                <span>Segui</span>
                            </a>
                        </div>
                        <div class="user d-flex justify-content-between align-items-center mt-2">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-circle"></i>
                                <div class="data ml-3">
                                    <h6 class="font-weight-bold mb-0">{{ Auth::user()->name }}</h6>
                                    <span>{{ Auth::user()->name }}</span>
                                </div>
                            </div>
                            <a href="#" class="text-primary font-weight-bold fs-12">
                                <span>Segui</span>
                            </a>
                        </div>
                        <div class="user d-flex justify-content-between align-items-center mt-2">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-circle"></i>
                                <div class="data ml-3">
                                    <h6 class="font-weight-bold mb-0">{{ Auth::user()->name }}</h6>
                                    <span>{{ Auth::user()->name }}</span>
                                </div>
                            </div>
                            <a href="#" class="text-primary font-weight-bold fs-12">
                                <span>Segui</span>
                            </a>
                        </div>
                        <div class="user d-flex justify-content-between align-items-center mt-2">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-circle"></i>
                                <div class="data ml-3">
                                    <h6 class="font-weight-bold mb-0">{{ Auth::user()->name }}</h6>
                                    <span>{{ Auth::user()->name }}</span>
                                </div>
                            </div>
                            <a href="#" class="text-primary font-weight-bold fs-12">
                                <span>Segui</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Side -->
    </div>
    <form action="{{ Route('logout') }}" method="post" class="d-inline">
        @csrf
        <button class="btn btn-sm btn-danger" href="{{ Route('logout') }}"><h6 class="m-0">Logout</h6></button>
    </form>
</div>
@endsection
