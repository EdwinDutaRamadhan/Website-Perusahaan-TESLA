<section id="{{ $d->model_id }}" class="section1 img-fluid d-flex align-times-center text-center" style="background-image: url('../img/{{ $d->gambar }}');{{ ($d->model_id == 1) ? ("margin-top: -75px;") : (""); }}">
    <div class="container mx-auto">
        <div class="d-flex justify-content-center m-2">
            <div class="row">
                <div class="row p-4 m-4">
                    <div class="col-md-12">
                        <h1>{{ $d->model }}</h1>
                        <h6>Schedule a Test Drive</h6>
                    </div>
                </div>
                <div class="row p-4 m-4"></div>
                <div class="row p-5 m-5"></div>
                <div class="row p-5 m-4">
                    
                    @if($d->model_id == 7)
                    <div class="col-md-12">
                        <form action="">
                            <input type="submit" value="Shop Now">
                        </form>
                    </div>
                    @elseif($d->model_id == 5 OR $d->model_id == 6)
                    <div class="col-md-6">
                        <form action="">
                            <input type="submit" value="Order Now">
                        </form>
                    </div>
                    <div class="col-md-6">
                        <form action="">
                            <input type="submit" value="Learn More">
                        </form>
                    </div>
                    @else()
                    <div class="col-md-6">
                        <form action="">
                            <input type="hidden" name="model" id="{{ $d->model_id }}">
                            <input type="submit" value="Custom Order">
                        </form>
                    </div>
                    <div class="col-md-6">
                        <form action="">
                            <input type="submit" value="Existing inventory">
                        </form>
                    </div>
                    @endif()
                </div>
            </div>
        </div>
    </div>
</section>