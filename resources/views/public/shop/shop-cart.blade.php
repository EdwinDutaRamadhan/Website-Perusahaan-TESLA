@extends('layout.tesla-shop')
@section('container')
    <div class="container p-2">
        <div class="row">
            <div class="col-md-12 mb-3">
                <h2>Cart</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                @foreach ($data as $d)
                    <div class="card mb-3" style="width: 100%;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="..." class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="card-title">{{ $d->title }}</h6>
                                        <h6 class="card-title"></h6>
                                        <h6 class="card-title">${{ $d->price }}.00</h6>
                                    </div>
                                    <p class="card-text">{{ $d->type }}</p>
                                    <select name="quantity">
                                        <option {{ ($d->quantity == "1")? "selected" : ""; }} value="1">1</option>
                                        <option {{ ($d->quantity == "2")? "selected" : ""; }}  value="2">2</option>
                                        <option {{ ($d->quantity == "3")? "selected" : ""; }}  value="3">3</option>
                                        <option {{ ($d->quantity == "4")? "selected" : ""; }}  value="4">4</option>
                                        <option {{ ($d->quantity == "5")? "selected" : ""; }}  value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-3">Order Summary</h4>
                        <div class="d-flex justify-content-between">
                            <p class="text-muted">Shipping</p>
                            <p class="text-muted"></p>
                            <p class="text-muted">Free</p>
                        </div>
                        <div class="d-flex justify-content-between" style="margin-top: -3%;">
                            <p class="text-muted">Sales Tax</p>
                            <p class="text-muted"></p>
                            <p class="text-muted">Calculated at checkout</p>
                        </div>
                        <div class="d-flex justify-content-between mt-3 mb-4">
                            <h4>Subtotal</h4>
                            <h4></h4>
                            <h4>$850.00</h4>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
