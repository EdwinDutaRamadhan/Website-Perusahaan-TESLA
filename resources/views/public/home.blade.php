@extends('layout.tesla')
@section('container')
    @foreach ($data as $d)
        @include('partials.section-landing')
    @endforeach
@endsection()
