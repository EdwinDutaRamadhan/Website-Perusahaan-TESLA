@extends('layout.tesla-shop')
@section('container')
    <div class="container p-2">
        <div class="row">
            <div class="col-md-12 mb-3">
                <h2 class="text-center">Orders</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($data as $d)
                    <div class="card mb-3" style="width: 100%;">
                        <div class="row g-0 ">
                            <div class="col-md-3">
                                <img src="{{ asset('storage/' . $d->image) }}" class="img-fluid rounded-start"
                                    style="max-height: 150px;" alt="">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="card-title">{{ $d->title }} x {{ $d->quantity }}</h6>
                                        <h6 class="card-title"></h6>
                                        <h6 id="cart-price" class="card-title">${{ $d->price }}.00</h6>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="card-text">{{ $d->type }}</p>
                                        
                                        <p class="card-text"></p>
                                        <h6 class="card-text">{{ $d->method }}</h6>
                                    </div>
                                    <p class="card-text">Order at : {{ $d->created_at->toDateString() }}<br> Arrive at : {{ $d->created_at->addDays(3)->toDateString() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
