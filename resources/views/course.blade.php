@extends('layouts.app')

@section('title', 'Course')

@section('navbar')
    <x-navbar contentName='navbar.dashboard' :attributesData="['userID'=>$userID]" />
@endsection

@section('content')
    <x-course :courses="$courses" :modules="$modules" :articles="$articles"/>
@endsection
