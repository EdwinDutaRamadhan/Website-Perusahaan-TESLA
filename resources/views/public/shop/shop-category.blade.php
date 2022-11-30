@extends('layout.tesla-shop')
@section('container')
    @switch($type)
        @case('Charging')
            @include('partials.shop.category-charging')  
            @break
        @case('Vehicle')
            @include('partials.shop.category-model-S')
            @include('partials.shop.category-model-3')
            @include('partials.shop.category-model-X')
            @include('partials.shop.category-model-Y')
            @break
        @case('Apparel')
            {{-- @include('partials.shop.category-apparel') --}}
            @break
        @case('Lifestyle')
            @include('partials.shop.category-lifestyle')  
            @break
        @default
            
    @endswitch 
@endsection