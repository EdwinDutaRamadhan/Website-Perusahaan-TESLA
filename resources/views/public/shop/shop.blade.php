@extends('layout.tesla-shop')
@section('container')
    <div class="row">
        @include('partials.shop.section-shop')
        @foreach ($data as $d)
            @include('partials.shop.section-2-shop')
        @endforeach
    </div>
@endsection()
{{-- 
    shop
-----category
		----Charging(id,tipe,judul, harga, jumlah, desc, image)
			---At Home
			---On the Road
			---Parts
		----Vehicle Acc(where Model)(id,tipe,judul, harga, jumlah, desc, image)
			---Interior
			---Eksterior
			---Wheels and Tires
			---Floor Mats
			---Keys
		----Apparel(where Gender)(id,tipe,judul,size, harga, jumlah, desc, image)
			---tees
			---sweathshirts and hoodies
			---Onesies
			---Outerwear
			---Joggers
			---Hats
			---Socks
		----lifestyle(id,tipe,judul, harga, jumlah, desc, image)
			---Bags
			---Drinkware	
			---Mini Teslas
			---Outdoor & Tech
 --}}