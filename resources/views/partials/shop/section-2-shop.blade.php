<section class="section-shop img-fluid d-flex align-times-center text-center" style="background-image: url('../img/{{ $d->image }}');">
    <div class="container mx-auto">
        <div class="d-flex justify-content-center m-1">
            <div class="row">
                <div class="row p-4 m-4">
                    <div class="col-md-12">
                        
                    </div>
                </div>
                <div class="row p-4 m-4"></div>
                <div class="row p-5 m-5">
                    
                </div>
                <div class="row p-5 m-4">
                    <div class="col-sm-12 m-4">
                        <h1 style="{{ ($d->id % 2 == 0 AND $d->id != 6)? "color: black" :"color: aliceblue" }}">{{ $d->nama }}</h1>
                    </div>
                    <div class="col-md-12">
                        <form action="/shop/category/" method="POST">
                            <input type="submit" value="Shop Now">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>