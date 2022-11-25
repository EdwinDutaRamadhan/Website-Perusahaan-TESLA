<section id="{{ $d->model_id }}" class="section1 img-fluid d-flex align-times-center text-center"
    style="background-image: url('../img/{{ $d->gambar }}');{{ $d->model_id == 1 ? 'margin-top: -75px;' : '' }}">
    <div class="container mx-auto">
        <div class="d-flex justify-content-center m-2">
            <div class="row">
                <div class="row p-4 m-4">
                    <div class="col-md-12">
                        <h1>{{ $d->model }}</h1>
                        <h6>{{ $d->note }}</h6>
                    </div>
                </div>
                <div class="row p-5 m-4"></div>
                <div class="row p-5 m-4"></div>
                <div class="row p-5 m-5">

                    @if ($d->model_id == 7)
                        <div class="col-md-12">
                            <form action="">
                                <input type="submit" value="Shop Now">
                            </form>
                        </div>
                    @elseif($d->model_id == 5 or $d->model_id == 6)
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
                            <form action="/custom/" method="POST">
                                @csrf
                                <input type="hidden" name="model" value="{{ $d->model }}">
                                <input type="submit" value="Custom Order">
                            </form>
                        </div>
                        <div class="col-md-6">
                            {{-- <a class="btn btn-outline-dark" href="/inventory/">Existing Inventory</a> --}}
                            <form action="/inventory" method="POST">
                                @csrf
                                <input type="hidden" name="sortmodel" value="{{ $d->model }}">
                                <input type="submit" value="Existing Inventory">
                            </form>
                        </div>
                    @endif()
                </div>
            </div>
        </div>
    </div>
</section>
