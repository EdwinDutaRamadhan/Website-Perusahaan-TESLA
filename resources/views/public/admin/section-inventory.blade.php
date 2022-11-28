<div class="container-fluid">
    @include('public.admin.section-inventory-add')
    <!-- Button trigger modal -->
    <div class="row m-2">
        <div class="col-md-2">
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Insert Inventory Car
            </button>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="/admin/dashboard/" method="post">
                @csrf
            <div class="row">               
                    <input type="hidden" name="section" value="Sort">
                    <div class="col-4">
                        <select class="form-select form-select-sm" name="sortModel" aria-label=".form-select-sm example">
                            <option value="null" selected>Sort By Model</option>
                            <option value="All Model">All Model</option>
                            <option value="Model S">Model S</option>
                            <option value="Model 3">Model 3</option>
                            <option value="Model X">Model X</option>
                            <option value="Model Y">Model Y</option>
                          </select>
                    </div>
                    <div class="col-4"></div>
                    <div class="col-4">
                        <input type="submit" class="btn btn-outline-dark btn-sm" value="See Result">
                    </div> 
            </div>
        </form>
        </div>
    </div>
    <div class="row m-2">
        @foreach ($data as $d)
            <div class="card mb-3">
                <div class="row g-0" style="height: 160px;">
                    <div class="col-md-3">
                        <img src="{{ asset('storage/' . $d->image) }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="d-flex align-items-start flex-column bd-highlight mb-3">
                                        <div class="p-2 bd-highlight">
                                            <h5>{{ $d->name }}</h5>
                                            <p style="margin-top: -10px;"> {{ $d->trim }}</p>
                                            <p style="margin-top: -15px;font-size:15px;">{{ $d->wheels }} |
                                                {{ $d->internal }}<br>
                                                {{ $d->milage }} mile odometer<br>
                                                Available for local delivery in {{ $d->delivery }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="d-flex align-items-end flex-column bd-highlight mb-3">
                                        <div class="p-2 bd-highlight">
                                            <h5 align="right">${{ $d->fee }}</h5>
                                            <a style="font-size: 15px;" data-bs-toggle="collapse"
                                                href="#detail{{ $d->id }}" aria-expanded="false"
                                                aria-controls="multiCollapseExample1">Show Details</a>
                                        </div>
                                    </div>
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
                                                <form action="/admin/dashboard/" method="post">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $d->id }}">
                                                    <input type="hidden" name="image_kw" value="{{ $d->image }}">
                                                    <input type="hidden" name="section" value="Inventory Update">
                                                    @include('public.admin.section-inventory-update')
                                                    <button class="btn btn-outline-dark ps-5 pe-5" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $d->id }}">Update</button>
                                                </form>
                                            </div>
                                            <div>
                                                <a href="/inventory/detail/{{ $d->id }}" class="btn btn-outline-dark ps-5 pe-5">Details</a>
                                            </div>
                                            <div class="">
                                                <form action="/admin/dashboard/" method="post">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $d->id }}">
                                                    <input type="hidden" name="section" value="Inventory Delete">  
                                                    <button class="btn btn-outline-dark ps-5 pe-5"
                                                        onclick="return confirm('Apakah anda yakin ingin menghapus {{ $d->name }}');"type="submit">Delete</button>
                                                </form>
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
    </div>
</div>
