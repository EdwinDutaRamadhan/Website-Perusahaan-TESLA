@extends('layout.tesla')
@section('container')
    @foreach ($data as $d)
        @include('partials.home.section-landing')
    @endforeach
@endsection()
