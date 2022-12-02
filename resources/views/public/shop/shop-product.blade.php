@extends('layout.tesla-shop')
@section('container')
    @foreach ($data as $d)
        <div class="container-fluid">
            <div class="row ms-4 me-4">
                <div class="col-md-8">
                    <div class="container p-5">
                        <img src="{{ asset('storage/'.$d->image) }}" alt="not found" class="img-fluid" style="width: 100%;">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h2>{{ $d->title }}</h2>
                            <h4>${{ $d->price }}</h4>
                        </div>
                        <div class="col-md-12">
                            <div class="order-option">
                                <label for="quantity">Quantity</label><br>
                                <span id="quantity-field">
                                    <button class="btn btn-light" id="down" onclick="setQuantity('down');"><b>-</b></button>
                                    <input type="text" id="quantity" value="1" style="width: 40px;text-align: center;border: aliceblue;">
                                    <button class="btn btn-light" id="up" onclick="setQuantity('up');"><b>+</b></button>
                                </span>
                        </div>
                        <div class="col-md-12 mt-3 mb-4">
                            <button class="btn btn-primary mb-3" style="width: 100%;">Add to Cart</button>
                            <p class="text-muted"><b>Description</b></p>
                            <p class="text-muted">
                                {{ $d->desc }}
                            </p>
                        </div>
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
