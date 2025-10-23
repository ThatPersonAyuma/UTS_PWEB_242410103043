
@extends('layouts.app')

@section('title', 'Profile')

@section('navbar')
    <x-navbar contentName='navbar.dashboard' :attributesData="[ 'userID' => $student['id']]" />
@endsection

@section('content')
    <x-profile :stats="$stats" :student="$student"/>
@endsection
