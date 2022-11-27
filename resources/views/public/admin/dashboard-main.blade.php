@extends('layout.tesla-admin')
@section('container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                @include('public.admin.dashboard-section-sidebar')
            </div>
            <div class="col-md-10">
                <h2>Section</h2>
                @switch($section)
                    @case('Home')
                        <h2>Home</h2>
                    @break
                        
                    @case('Landing')
                        <h2>Landing</h2>
                        @include('public.admin.section-landing')
                    @break

                    @case('Inventory')
                        <h2>Inventory</h2>
                        @include('public.admin.section-inventory')
                    @break

                    @case('Shop')
                        <h2>Shop</h2>
                    @break

                    @default
                @endswitch
            </div>
        </div>
    </div>
@endsection
