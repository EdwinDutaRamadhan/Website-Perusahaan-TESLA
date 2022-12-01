<div class="container-fluid">
    <div class="row mb-2">
        @include('partials.admin.section-shop-add-charging')
        @include('partials.admin.section-shop-add-vehicle-accessories')
        @include('partials.admin.section-shop-add-apparel')
        @include('partials.admin.section-shop-add-lifestyle')
        <div class="btn-group" role="group" aria-label="Basic outlined example">
            <button type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#insert">Insert Charging</button>
            <button type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#insert-vehicle">Insert Vehicle</button>
            <button type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#insert-apparel">Insert Apparel</button>
            <button type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#insert-lifestyle">Insert Lifestyle</button>
          </div>
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
                                <div class="d-flex bd-highlight" style="margin-top: -12px;margin-bottom: -8px;margin-left: -10px;">
                                    <div class="me-auto p-2 bd-highlight">Type : {{ $d->type }}</div>
                                    <div class="p-2 bd-highlight">{{ $d->size }}</div>
                                    <div class="p-2 bd-highlight">{{ $d->model }}</div>
                                  </div>
                                <div class="row">
                                    <div class="col-8">
                                        <p class="card-text">{{ substr($d->desc,0,150) }}...</p>
                                        <p class="card-text"><small class="text-muted">Last update {{ $d->updated_at }} by {{ $d->user->name }}</small></p>
                                    </div>
                                    <div class="col-1"></div>
                                    <div class="col-3">
                                        <div class="d-flex flex-column bd-highlight" >
                                            <div class="p-1 bd-highlight" ><button type="button" class="btn btn-outline-dark btn-sm" style="width: 100%;">Update</button></div>
                                            <div class="p-1 bd-highlight"><button type="button" class="btn btn-outline-dark btn-sm" style="width: 100%;" onclick="return confirm('apakah anda yakin ingin menghapus {{ $d->title }}');">Delete</button></div>
                                          </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
