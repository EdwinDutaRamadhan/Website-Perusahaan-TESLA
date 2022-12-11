<section class="section-shop section-image img-fluid d-flex align-times-center text-center"
    style="background-image: url('../img/{{ $d->image }}');">
    <div class="container mx-auto">
        <div class="d-flex justify-content-center m-1">
            <div class="row" style="height: 43rem;">
                <div style="margin-top: 32rem;">
                    <h1 class="text-center m-0" style="margin-top:30rem;{{ $d->id % 2 == 0 and $d->id != 6 ? 'color: black' : 'color: aliceblue' }}">{{ $d->nama }}
                </h1>
                </div>
                <div class="m-0">
                    <a class="btn btn-light" style="min-width: 15rem;" href="/shop/category/{{ str_replace(' ', '-', $d->nama) }}">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
