@extends('layout.tesla-shop')
@section('container')
    <div class="container-fluid">
        <div class="row justify-content-center mt-1 mb-2">
            <div class="col-sm-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-secondary mx-auto">Payment</span>
                </h4>
                <ul class="list-group mt-3 mb-3">
                    @foreach ($data as $d)
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">{{ $d->title }} x {{ $d->quantity }}</h6>
                                <small class="text-muted">{{ $d->type }}</small>
                            </div>
                            <span class="text-muted">${{ $d->price }}</span>
                        </li>
                    @endforeach

                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>${{ $total }}</strong>
                    </li>
                </ul>
                <hr class="my-4">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="same-address">
                    <label class="form-check-label" for="same-address">Shipping address is the same as my billing
                        address</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="save-info">
                    <label class="form-check-label" for="save-info">Save this information for next time</label>
                </div>
                <hr class="my-4">
                <form action="/shop/order" method="post">
                    @csrf
                    <h5 class="mb-3">Payment method</h5>
                    <div class="my-3">
                        <div class="form-check">
                            <input id="credit" name="paymentMethod" type="radio" value="Credit card"
                                class="form-check-input" checked required>
                            <label class="form-check-label" for="credit">Credit card</label>
                        </div>
                        <div class="form-check">
                            <input id="debit" name="paymentMethod" type="radio" value="Debit card"
                                class="form-check-input" required>
                            <label class="form-check-label" for="debit">Debit card</label>
                        </div>
                        <div class="form-check">
                            <input id="paypal" name="paymentMethod" type="radio" value="PayPal"
                                class="form-check-input" required>
                            <label class="form-check-label" for="paypal">PayPal</label>
                        </div>
                    </div>
                    <hr class="my-4">
                    <button class="w-100 btn btn-primary btn-lg" type="submit">Order now</button>
            </div>
            </form>
        </div>
    @endsection
