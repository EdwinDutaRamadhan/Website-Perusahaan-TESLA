@extends('layout.tesla-shop')
@section('container')
    @switch($model)
        @case('Model S')
            @include('partials.shop.category-model-S')
            @break
        @case('Model 3')
            @include('partials.shop.category-model-3')
            @break
        @case('Model X')
            @include('partials.shop.category-model-X')
            @break
        @case('Model Y')
            @include('partials.shop.category-model-Y')
            @break
        @default
            
    @endswitch 
@endsection