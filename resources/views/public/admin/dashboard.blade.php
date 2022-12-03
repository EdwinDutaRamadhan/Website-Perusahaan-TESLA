@extends('layout.tesla-admin-test')
@section('container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('partials.admin.admin-sidebar')
            </div>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @switch($section)
                    @case('dashboard')
                        @include('partials.admin.admin-section-dashboard')
                        @break
                    @case('landing')
                        @include('partials.admin.section-landing')
                        @break
                    @case('inventory')
                        @include('partials.admin.section-inventory')
                        @break
                    @case('shop')
                        @include('partials.admin.section-shop')
                        @break
                    @default    
                @endswitch
            </main>
        </div>
    </div>
@endsection
