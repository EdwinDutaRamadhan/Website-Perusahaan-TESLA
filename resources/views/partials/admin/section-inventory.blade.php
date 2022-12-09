<div class="container-fluid">
    @include('partials.admin.section-inventory-add')
    <!-- Button trigger modal -->
    <form action="/admin/inventory/search" method="post">
        @csrf
        <input type="hidden" name="section" value="Inventory Search">
        @if (session()->has('create'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('create') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        @endif
        @if (session()->has('delete'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        {{ session('delete') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        @endif
        @if (session()->has('update'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ session('update') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        @endif
        <div class="row m-2">
            <div class="col-md-2">
                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Insert Inventory
                </button>
            </div>
            <div class="col-md-4">

                <div class="input-group mb-3">
                    <input type="text" name="search" class="form-control" placeholder="Search.."
                        value="{{ request('search') }}">
                    <button type="submit" class="btn btn-outline-secondary" type="button"
                        id="button-addon2">Search</button>
                </div>
            </div>
            <div class="col-md-2">
            </div>
    </form>
    <div class="col-md-4">
    </div>
</div>
<div class="row m-2">
    @if (count($data) > 0)
        @foreach ($data as $d)
            <div class="card mb-3 ">
                <div class="row g-0" style="height: 160px;">
                    <div class="col-md-3">
                        <img src="{{ asset('storage/' . $d->image) }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <div class="row">
                                <div class="d-flex justify-content-between">
                                    <h5>{{ $d->name }}</h5>
                                    <h5></h5>
                                    <h5>${{ strlen($d->fee) == 6 ? substr($d->fee, 0, 3) . ',' . substr($d->fee, 3) : substr($d->fee, 0, 2) . ',' . substr($d->fee, 2) }}.00
                                    </h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="">{{ $d->trim }}</p>
                                    <p class="text-muted"></p>
                                    <a align="right" style="font-size: 15px;" data-bs-toggle="collapse"
                                        href="#detail{{ $d->id }}">Show Details</a>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="text-muted" style="margin-top: -2%;">
                                        {{ $d->wheels }} | {{ $d->internal }} <br>
                                        {{ $d->milage }} mile odometer<br>
                                        Available for local delivery in {{ $d->delivery }}
                                    </p>
                                    <p class="text-muted"></p>
                                    <p class="text-muted" align="right">Last updated at <br> {{ $d->updated_at }}
                                        <br>by {{ $d->user->name }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="detail{{ $d->id }}">
                            <div class="m-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="p-1" style="height: 70%;">
                                            <img src="{{ asset('storage/' . $d->image) }}" alt=""
                                                class="img-fluid rounded-start">
                                        </div>
                                        <div class="d-flex justify-content-evenly">
                                            <div><b style="font-size: 20px;">{{ $d->startspeed }}</b>s</div>
                                            <div><b style="font-size: 20px;">{{ $d->topspeed }}</b>mph</div>
                                            <div><b style="font-size: 20px;">{{ $d->range }}</b>mi</div>
                                        </div>
                                        <div class="d-flex justify-content-evenly">
                                            <p class="text-muted ps-4">0-60 mph</p>
                                            <p class="text-muted">Top Speed</p>
                                            <p class="text-muted">range (EPA est.)</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{ asset('img/Interior.png') }}" alt=""
                                            class="img-fluid rounded-start">
                                    </div>
                                </div>
                                <div class="row p-4" style="margin-top: -6%;">
                                    <div class="col-md-3">
                                        <p>{{ $d->color }}<br>
                                            {{ $d->wheels }}<br>
                                            {{ $d->internal }}</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p>{{ $d->autopilot }}<br>
                                            {{ $d->trial }} Premium Connectrivity Trial</p>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="d-flex justify-content-between">
                                            <div class="ms-2">
                                                <form action="/admin/inventory/update" method="post">
                                                    @csrf
                                                    <input type="hidden" name="id"
                                                        value="{{ Crypt::encryptString($d->id) }}">
                                                    <input type="hidden" name="image_kw"
                                                        value="{{ $d->image }}">
                                                    @include('partials.admin.section-inventory-update')
                                                    <button class="btn btn-outline-dark ps-5 pe-5"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $d->id }}">Update</button>
                                                </form>
                                            </div>
                                            <div>
                                                <a href="/inventory/detail/{{ $d->id }}"
                                                    class="btn btn-outline-dark ps-5 pe-5">Details</a>
                                            </div>
                                            <div class="">
                                                <a href="/admin/inventory/delete/{{ Crypt::encryptString($d->id) }}"
                                                    class="btn btn-outline-dark ps-5 pe-5"
                                                    onclick="return confirm('Apakah anda yakin ingin menghapus {{ $d->name }}');">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="m-4">
            <div class="row">
                <div class="col-md-12 m-5">
                    <h2 class="text-center">Don't see the Tesla you're looking for?</h2>
                    <h5 class="text-center text-muted">Change you're search key</h5>
                </div>
            </div>
        </div>
    @endif
    {{ $data->links() }}
</div>
</div>
