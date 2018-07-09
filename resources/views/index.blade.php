@extends('layouts.default')

@section('custom_head')
    <link rel="stylesheet" href="{{ asset('/css/banner.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/skills.css') }}">
@endsection

@section('content')
    @include('components.banner')
    @include('components.profile')
    @include('components.skills')
@endsection

@section('custom_script')

@endsection