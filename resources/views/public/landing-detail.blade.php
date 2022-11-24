@extends('layout.tesla-custom')
@section('container')
    <div class="row">
        @foreach ($data as $d)
            <div class="col-md-8 section-image"
                style="background-image: url('{{ asset('../img/cars/' . $d->image) }}');min-height:60rem;">
            </div>
            <div class="col-md-4">
                @include('partials.section-detail')
            </div>
        @endforeach
    </div>
    </div>
@endsection
