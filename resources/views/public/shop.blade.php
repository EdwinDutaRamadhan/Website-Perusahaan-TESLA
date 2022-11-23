@extends('layout.tesla-shop')
@section('container')
    <h1>shop</h1>
    <div class="row">
        <form action="/shop/sort" method="post">
            @csrf
            <label for="sort">Sort By</label>
            <select name="sort" id="sort" >
                <option value="price-low">Price : Lowest->Highest</option>
                <option value="price-high">Price : Highest->Lowest</option>
                <option value="sold-low">Sold : Lowest->Highest</option>
                <option value="sold-high">Sold : Highest->Lowest</option>
            </select>
            <input type="submit" value="Sort">
        </form>
        @foreach ($data as $d)
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $d->nama }}</h5>
                        <p class="card-text">{{ $d->harga }}</p>
                        <a href="shop/details/{{ $d->nama }}" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection()
