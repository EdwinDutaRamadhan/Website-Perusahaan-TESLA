@extends('layout.tesla-shop')
@section('container')
    <div class="container-fluid">
        <div class="row">
            @include('partials.shop.section-shop') {{-- Banner --}}
            @foreach ($data as $d)
                @include('partials.shop.section-2-shop') {{-- Loop Section --}}
            @endforeach
        </div>
    </div>
@endsection()
{{-- 
    shop
-----category
		----Charging				(id,category,tipe,model,judul,size harga, jumlah, desc, image)
			---At Home
			---On the Road
			---Parts
		----Vehicle Acc(where Model)(id,category,tipe,model,judul,size harga, jumlah, desc, image)
			---Interior
			---Eksterior
			---Wheels and Tires
			---Floor Mats
			---Keys
		----Apparel(where Gender)	(id,category,tipe,model,judul,size, harga, jumlah, desc, image)
			---tees
			---sweathshirts and hoodies
			---Onesies
			---Outerwear
			---Joggers
			---Hats
			---Socks
		----lifestyle				(id,category,tipe,model,judul,size,harga, jumlah, desc, image)
			---Bags
			---Drinkware
			---Mini Teslas
			---Outdoor & Tech
			Shop::create(['category_id' => 4,'type' => 'Mini Teslas', 'model' => '', 'title'=>'Mini Model S', 'size' =>'', 'price' =>'600', 'desc'=>'lorem ipsum tesla', 'image'=>'imagesourcetesla', 'slug'=>'mini-model-s'])
 --}}
