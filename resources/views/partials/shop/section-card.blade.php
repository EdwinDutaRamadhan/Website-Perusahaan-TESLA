<div class="col-md-4 mb-4">
    <div class="card">
        {{-- {{ str_replace(' ','-',$d->title) }} --}}
        <a href="/shop/product/{{ Crypt::encryptString($d->id) }}"><img src="{{ asset("storage/".$d->image) }}" class="card-img-top" alt="..."></a>
        <div class="card-body">
            <a href="/shop/product/{{ Crypt::encryptString($d->id) }}" style="text-decoration: none;"><h6 class="card-title text-dark">{{ $d->title }}</h6></a>
            <h6>${{ $d->price }}</h6>
        </div>
    </div>
</div>