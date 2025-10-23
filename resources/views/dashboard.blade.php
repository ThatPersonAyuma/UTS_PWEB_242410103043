@extends('layouts.app')

@section('title', 'Landing')

@section('navbar')
    <x-navbar contentName='navbar.dashboard' :attributesData="['userID' => $userID]" />
@endsection

@section('content')
    <x-dashboard :welcome="$welcome" :name="$name"/>
@endsection
