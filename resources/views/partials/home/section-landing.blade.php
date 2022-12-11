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
            <div class="row justify-content-center"
                style="{{ $d->model_id == 1 ? 'margin-top: 300px' : 'margin-top: 320px' }}">
                <a href="/solarpanel" class="btn btn-dark" style="width: 20%;">Order Now</a>
            </div>
    @else
        <form action="/inventory" method="POST">
            @csrf
            <input type="hidden" name="sortmodel" value="{{ $d->model }}">
            <div class="row justify-content-center"
                style="{{ $d->model_id == 1 ? 'margin-top: 300px' : 'margin-top: 320px' }}">

                <input class="btn btn-dark" type="submit" style="width:20%; min-width:160px;" value="Existing Inventory">
            </div>
        </form>
    @endif
</div>
