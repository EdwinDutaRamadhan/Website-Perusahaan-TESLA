@extends('layout.tesla-shop')
@section('container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-3">
                <h2 class="text-center">Orders</h2>
            </div>
        </div>
        @if (count($dataOrder) == 0 and count($dataOrderSuccess) == 0)
            <div class="row justify-content-center mt-5">
                <div class="col-md-6 ms-5 mt-4">
                    <p class="text-muted text-center" style="font-size: 22px;">Your orders is empty.</p>
                    <form class="text-center" action="/shop" method="get">
                        <button type="submit" class="btn btn-primary mt-2 ms-2" style="width:50%;">Continue
                            Shopping</button>
                    </form>
                </div>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (count($dataOrder) > 0)
                    <p class="text-muted">On the way orders</p>
                    <hr class="my-2">
                @endif
                @foreach ($dataOrder as $d)
                    <div class="card mt-4 mb-3" style="width: 100%;">
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
                                    <div class="d-flex justify-content-between">
                                        <p class="card-text">Order at {{ $d->created_at->toDateString() }}<br>Arrived at :
                                            {{ $d->created_at->addDays(3)->toDateString() }}</p>
                                        <p></p>
                                        <a class="btn btn-outline-dark"
                                           style="height: 50%;" href="/shop/order/update/{{ Crypt::encryptString($d->id) }}">Completed Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @if (count($dataOrderSuccess) > 0)
                    <p class="text-muted">Success orders</p>
                    <hr class="my-2">
                @endif
                @foreach ($dataOrderSuccess as $d)
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
                                    <p class="card-text">Arrived at :
                                        {{ $d->created_at->addDays(3)->toDateString() }}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
