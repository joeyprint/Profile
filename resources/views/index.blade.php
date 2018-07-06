@extends('layouts.default')

@section('custom_head')
    <link rel="stylesheet" href="{{ asset('/css/banner.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
@endsection

@section('content')
    @include('components.banner')
    @include('components.profile')
@endsection

@section('custom_script')

@endsection