<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <!-- Insert Shop Item -->
            @include('partials.admin.section-shop-add')
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insert">
                Insert Item
            </button>

        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div>
    <div class="row">
        <div class="m-2">
            @foreach ($data as $d)
                <div class="card mb-3" style="width: 100%">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img src="{{ asset('storage/'.$d->image) }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title">{{ $d->title }}</h5>
                                    <h5 class="card-title"></h5>
                                    <h5 class="card-title">${{ $d->price }}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="card-text">Type : {{ $d->type }}</p>
                                    <p class="card-text"></p>
                                    <p class="card-text">size : {{ $d->size }}</p>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="card-text">{{ substr($d->desc,0,150) }}</p>
                                    </div>
                                    <div class="col-2"></div>
                                    <div class="col-4">
                                        <div class="btn-group" role="group" aria-label="Basic example" style="width: 100%;">
                                            <button type="button" class="btn btn-outline-dark btn-sm">Update</button>
                                            <button type="button" class="btn btn-outline-dark btn-sm">Details</button>
                                            <button type="button" class="btn btn-outline-dark btn-sm">Delete</button>
                                          </div>
                                    </div>
                                </div>
                                <p class="card-text"><small class="text-muted">Last update {{ $d->updated_at }} by {{ $d->user->name }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
