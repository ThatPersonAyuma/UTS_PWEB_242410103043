@props([
    'userID',
    ])
@php
    $currentRoute = Route::currentRouteName();
@endphp
<div class="col d-flex gap-2 align-items-center">
    <a href="{{ route('dashboard') }}" class="btn pt-1 d-flex flex-column">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
        </svg>
        @if($currentRoute == 'dashboard')
            <span class="" style="width:40px; height:4px; background:#0d6efd; border-radius:2px;"></span>
        @endif
    </a>
    <a href="{{ route('course') }}" class="btn d-flex flex-column">
    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
            <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
            <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
        </svg>
        @if($currentRoute == 'course')
            <span class="" style="width:35px; height:4px; background:#0d6efd; border-radius:2px;"></span>
        @endif
    </a>
    <a href="{{ route('profile') }}" class="btn  d-flex flex-column">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
        </svg>
        @if($currentRoute == 'profile')
            <span class="" style="width:40px; height:4px; background:#0d6efd; border-radius:2px;"></span>
        @endif
    </a>
</div>
<div class="col-auto d-flex gap-2 align-items-center">
    <a href="#" class="btn btn-light btn-lg  rounded-pill" style="outline-style: solid; outline-width: 2px; outline-color: #949496ff;">
        <div class="d-flex align-items-center gap-2">
            <p class="h5 mb-1">
                0
            </p>
            <img 
                src="{{ asset('img/key.png') }}"
                alt="keyImage" 
                width="30px" 
                height="30px"
            >
        </div>
    </a>
    <a href="#" class="btn btn-light btn-lg  rounded-pill" style="outline-style: solid; outline-width: 2px; outline-color: #949496ff;">
        <div class="d-flex align-items-center gap-2">    
            <p class="h5 mb-1">
                0
            </p>
            <img 
                src="{{ asset('img/energy.png') }}"
                alt="energyImage" 
                width="30px" 
                height="30px"
            >
        </div>
    </a>
    <x-navbar.photo-profile :src="$userID" :alt="'photo-profile' . $userID" />
</div>
