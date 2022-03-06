@extends('layouts.app')

@section('content')

    @include('pages.home.__banner')
    @include('pages.home.__about')
    @include('pages.home.__services')
    @include('pages.home.__services_part')
    @include('pages.home.__services_single')
    @include('pages.home.__price')
    @include('pages.home.__testimonail')
    @include('pages.home.__partners')
    @include('pages.home.__counter')
    @include('pages.home.__blog')

@endsection()
