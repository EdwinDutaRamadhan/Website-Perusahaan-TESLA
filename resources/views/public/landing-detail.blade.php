@extends('layout.tesla-custom')
@section('container')
    <div class="row">
        @foreach ($data as $d)
            <div class="col-md-8 section-image"
                style="background-image: url('{{ asset('storage/' . $d->image) }}');min-height:60rem;">
                <nav class="navbar fixed-bottom navbar-light bg-light" style="width: 66%;">
                    <div class="d-flex justify-content-center" style="width: 100%;">
                        <p><b>${{ $d->fee }} Purchase price</b></p>
                        <p class="ps-2 pe-2 text-muted">|</p>
                        <p style="font-size:15px;color:grey;">${{ ($d->fee - 7800) }} After potential savings</p>
                    </div>
                  </nav>
            </div>
            <div class="col-md-4">
                @if(isset($payments))
                    @include('partials.section-detail-payments')
                @else
                    @include('partials.section-detail')
                @endif
            </div>
        @endforeach
    </div>
    </div>
@endsection
