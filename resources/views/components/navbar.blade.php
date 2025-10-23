@props(['contentName', 'attributesData' => []])
@php
    $currentRoute = Route::currentRouteName();
@endphp
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid my-1 d-flex align-items-center">
        <div class="col-1"></div>
        <div class="col-10 d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img class="" style="height: 60px;" src="{{ asset('img/logo.png') }}" alt="login image">
                <a class="navbar-brand h2" style="font-size: 2.4rem;">Stadium</a>
            </div>   
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                <span class="navbar-toggler-icon"></span>
            </button>                                           
            <div class="d-none d-lg-flex justify-content-between w-100">
                <x-dynamic-component :component="$contentName" :attributesData="$attributesData" />
            </div>
        </div>
        <div class="col-1"></div>
        @if($currentRoute == NULL)
            <div class="collapse navbar-collapse justify-content-end" id="navbarMain">
                <div class="d-flex flex-column d-lg-none gap-2">
                    <a href="{{ route('login') }}" class="btn pt-1">Masuk</a>
                    <a href="" class="btn">Daftar</a>
                </div>
            </div>
        @else
            <div class="collapse navbar-collapse justify-content-end" id="navbarMain">
                <div class="d-flex flex-column d-lg-none gap-2">
                    <a href="{{ route('dashboard') }}" class="btn pt-1">Dashboard</a>
                    <a href="{{ route('course') }}" class="btn">Belajar</a>
                    <a href="{{ route('profile') }}" class="btn">Profile</a>
                </div>
            </div>
        @endif
        
    </div>
</nav>
