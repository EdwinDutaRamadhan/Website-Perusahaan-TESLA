@extends('layout.tesla-shop')
@section('container')
    <h1>shop</h1>
    <div class="row">
        @foreach ($data as $d)
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $d->nama }}</h5>
                    <p class="card-text">{{ $d->harga }}</p>
                    <a href="#" class="btn btn-primary">Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection()
