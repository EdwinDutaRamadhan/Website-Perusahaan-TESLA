@extends('layout.tesla-shop')
@section('container')
    @foreach ($data as $d)
        <div class="container-fluid">
            <div class="row ms-4 me-4">
                <div class="col-md-8">
                    <div class="container p-5">
                        <img src="{{ asset('storage/' . $d->image) }}" alt="not found" class="img-fluid" style="width: 100%;">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h2>{{ $d->title }}</h2>
                            <h4>${{ $d->price }}</h4>
                        </div>
                        <form action="/shop/cart/" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ Crypt::encryptString($d->id) }}">
                            <input type="hidden" name="image" value="{{ Crypt::encryptString($d->image) }}">
                            <div class="col-md-12">
                                <div class="order-option">
                                    <label for="quantity">Quantity</label><br>
                                    <span id="quantity-field">
                                        <button type="button" class="btn btn-light" id="down"
                                            onclick="setQuantityProduct('down');"><b>-</b></button>
                                        <input type="text" name="quantity" id="quantity" value="1" min="1" max="5"
                                            style="width: 40px;text-align: center;border: aliceblue;">
                                        <button type="button" class="btn btn-light" id="up"
                                            onclick="setQuantityProduct('up');"><b>+</b></button>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                @if (session()->has('quantity'))
                                    <p class="text-danger">
                                        {{ session('quantity') }}
                                    </p>
                                @endif
                            </div>
                            <div class="col-md-12 mt-3 mb-4">
                                <button type="submit" class="btn btn-primary mb-3" style="width: 100%;">Add to
                                    Cart</button>
                                <p class="text-muted"><b>Description</b></p>
                                <p class="text-muted">
                                    {{ $d->desc }}
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <h3 class="mb-5">Recommended Product</h3>
                @foreach ($dataRekomendasi as $d)
                    @include('partials.shop.section-card')
                @endforeach
            </div>
        </div>
    @endforeach
@endsection
