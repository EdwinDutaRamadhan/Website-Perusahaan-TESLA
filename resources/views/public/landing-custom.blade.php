@extends('layout.tesla-custom')
@section('container')
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <h4>test</h4>
        </div>
        <div class="col-md-4">
          <h6>test</h6>
        </div>
      </div>
    </div>
@endsection
{{-- <div class="row row-cols-1 row-cols-md-2 g-4">
  @foreach ($data as $d)
      <div class="col">
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $d->nama }} -- {{ $d->jenis }}</h5>
            <p class="card-text">Range : {{ $d->jarak }}</p>
            <p class="card-text">Top Speed : {{ $d->topspeed }}</p>
            <p class="card-text">0-60 mph : {{ $d->starter }}</p>
          </div>
        </div>
      </div>
  @endforeach
  </div> --}}
