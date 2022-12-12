<div class="col-md-4 mb-4">
    <div class="card">
        {{-- {{ str_replace(' ','-',$d->title) }} --}}
        <a href="/shop/product/{{ $d->category_id }}/{{ Crypt::encryptString($d->id) }}"><img src="{{ asset("storage/".$d->image) }}" class="card-img-top" alt="..."></a>
        <div class="card-body">
            <a href="/shop/product/{{ $d->category_id }}/{{ Crypt::encryptString($d->id) }}" style="text-decoration: none;"><h6 class="card-title text-dark"><b>{{ $d->title }}</b></h6></a>
            <h6 class="text-dark"><b>${{ $d->price }}</b></h6>
        </div>
    </div>
</div>