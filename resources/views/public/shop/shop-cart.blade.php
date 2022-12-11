@extends('layout.tesla-shop')
@section('container')
    <div class="container p-2">
        <div class="row">
            <div class="col-md-12 mb-3">
                <h2>Cart</h2>
            </div>
        </div>
        @if (count($data) == 0)
            <div class="row">
                <div class="col-md-6 ms-5 mt-4">
                    <p class="text-muted" style="font-size: 22px;">Your cart is empty.</p>
                    <form action="/shop" method="get">
                        <button type="submit" class="btn btn-primary mt-2 ms-2" style="width:50%;">Continue
                            Shopping</button>
                    </form>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-md-7">
                @foreach ($data as $d)
                    <div class="card mb-3" style="width: 100%;">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img src="{{ asset('storage/' . $d->image) }}" class="img-fluid rounded-start"
                                    style="max-height: 150px;" alt="">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="card-title">{{ $d->title }}</h6>
                                        <h6 class="card-title"></h6>
                                        <h6 id="cart-price" class="card-title">${{ $d->price }}.00</h6>
                                    </div>
                                    <p class="card-text">{{ $d->type }}</p>
                                    <div class="col-md-12">
                                        <div class="order-option">
                                            <label for="quantity">Quantity</label><br>
                                            <input type="text" name="quantity" id="cart-quantity"
                                                value="{{ $d->quantity }}"
                                                style="width: 40px;text-align: center;border: aliceblue;" readonly>
                                            {{-- <a class="ms-4"
                                                href="/shop/cart/remove/{{ Crypt::encryptString($d->id) }}" >Remove</a> --}}
                                            <button type="button" class="btn btn-link-secondary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal{{ $d->id }}">
                                                Remove
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{ $d->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="m-4">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="exampleModalLabel">Remove Item</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-muted">Are you sure you want to remove this item from your cart?</p>
                                    </div>
                                    <div class="modal-footer justify-content-start">
                                        <a class="btn btn-outline-dark p-2"
                                            href="/shop/cart/remove/{{ Crypt::encryptString($d->id) }}">Yes, Remove</a>
                                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <a class="btn btn-outline-dark p-2">
                                                href="/shop/cart/remove/{{ Crypt::encryptString($d->id) }}" >Yes, Remove</a> --}}
            {{-- <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
            </button> --}}


            @if (count($data) > 0)
                <div class="col-md-5">
                    <form action="/shop/checkout" method="post">
                        @csrf
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
                                    <input type="hidden" name="total" value="{{ $total }}">
                                    <h4 id="cart-total">${{ $total }}.00</h4>
                                </div>
                                <button type="submit" class="btn btn-primary" style="width: 100%;">Checkout</button>
                            </div>
                        </div>
                    </form>
                </div>
            @endif
        </div>
    </div>
@endsection
