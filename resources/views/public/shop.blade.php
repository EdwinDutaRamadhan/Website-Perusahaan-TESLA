@extends('layout.tesla-shop')
@section('container')
    <div class="row">
        @include('partials.section-shop')
        @foreach ($data as $d)
            @include('partials.section-2-shop')
        @endforeach
    </div>
@endsection()
