@extends('layouts.app')

@section('content')

    @include('pages.about.__top')
    @include('pages.about.__about')
    @include('pages.about.__history')
    @include('pages.about.__counter')
    @include('pages.about.__services')
    @include('pages.about.__team')
    @include('pages.about.__partners')

@endsection()
