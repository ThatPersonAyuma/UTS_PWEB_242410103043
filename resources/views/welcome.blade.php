@extends('layouts.app')

@section('title', 'Landing')

@section('navbar')
    <x-navbar contentName='navbar.login' :attributesData="[]" />
@endsection

@section('content')
    @for ($i = 1; $i < 3; $i++)
    <img src="{{ asset('img/welcome/' . $i . '.jpg') }}"
        alt="welcomeImg{{ $i }}"
        style="height: 100%; object-fit: contain;"
        class="img-fluid">
    @endfor
@endsection

@section('footer')
    @include('components.footer')
@endsection
