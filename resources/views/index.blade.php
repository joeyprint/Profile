@extends('layouts.default')

@section('custom_head')
    <link rel="stylesheet" href="{{ asset('/css/banner.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/skills.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/blog.css') }}">
@endsection

@section('content')
    @include('components.banner')
    @include('components.profile')
    @include('components.skills')
    @include('components.blog')
@endsection

@section('custom_script')
    <script src="{{ asset('/js/blog.js') }}"></script>
@endsection