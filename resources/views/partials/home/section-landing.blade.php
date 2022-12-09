{{-- <section id="{{ $d->model_id }}" class="section1 img-fluid d-flex align-times-center text-center"
    style="height: 100px; background-image: url('{{ asset('storage/'.$d->image) }}');{{ $d->model_id == 1 ? 'margin-top: -75px;' : '' }}">
    <div class="container-fluid">
        <div class="row">
            <h1>test</h1>
        </div>
       
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
                            <a class="btn btn-outline-dark" href="/shop" style="margin-right: 10%;">Shop Now</a>
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
                    @else
                        <div class="col-md-3"></div>
                        <div class="col-md-2">
                            <form action="/custom/" method="POST">
                                @csrf
                                <input type="hidden" name="model" value="{{ $d->model }}">
                                <input type="submit" value="Custom Order">
                            </form>
                        </div>
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-2">
                            
                            <form action="/inventory" method="POST">
                                @csrf
                                <input type="hidden" name="sortmodel" value="{{ $d->model }}">
                                <input class="btn btn-dark" type="submit" value="Existing Inventory">
                            </form>
                        </div>
                        <div class="col-md-3"></div>
                    @endif
                </div>
            </div>
        </div>
            
    </div>
</section> --}}
<div id="{{ $d->model_id }}" class="container-fluid"
    style="background-position: center;background-size: cover; height:43rem;background-image: url('{{ asset('storage/' . $d->image) }}');{{ $d->model_id == 1 ? 'margin-top: -75px;' : '' }}">
    <div class="row p-5 mb-5">
        <div class="mt-5">
            <h1 class="text-center mt-3">{{ $d->model }}</h1>
            <h6 class="text-center">{{ $d->note }}</h6>
        </div>
    </div>

    @if ($d->model_id == 7)
        <form action="/shop" method="get">
            <div class="row justify-content-center"
                style="{{ $d->model_id == 1 ? 'margin-top: 300px' : 'margin-top: 320px' }}">
                <input class="btn btn-dark" type="submit" style="width:20%;" value="Shop">
            </div>
        </form>
    @elseif($d->model_id == 5)
        <form action="/solarpanel" method="get">
            <div class="row justify-content-center"
                style="{{ $d->model_id == 1 ? 'margin-top: 300px' : 'margin-top: 320px' }}">
                <input class="btn btn-dark" type="submit" style="width:20%;" value="Shop">
            </div>
        </form>
    @elseif($d->model_id == 6)
        <form action="/solarpanel" method="get">
            <div class="row justify-content-center"
                style="{{ $d->model_id == 1 ? 'margin-top: 300px' : 'margin-top: 320px' }}">
                <input class="btn btn-dark" type="submit" style="width:20%;" value="Shop">
            </div>
        </form>
    @else
        <form action="/inventory" method="POST">
            @csrf
            <input type="hidden" name="sortmodel" value="{{ $d->model }}">
            <div class="row justify-content-center"
                style="{{ $d->model_id == 1 ? 'margin-top: 300px' : 'margin-top: 320px' }}">

                <input class="btn btn-dark" type="submit" style="width:20%;" value="Existing Inventory">
            </div>
        </form>
    @endif
</div>
