<div class="container-fluid">
    @include('public.admin.section-inven-add')
    <!-- Button trigger modal -->
    <div class="row m-2">
        <div class="col-md-4">
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Insert Inventory Car
            </button>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div>
    <div class="row m-2">
        @foreach ($data as $d)
            <div class="card mb-3">
                <div class="row g-0" style="height: 160px;">
                    <div class="col-md-3">
                        <img src="{{ asset('storage/'.$d->image) }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="d-flex align-items-start flex-column bd-highlight mb-3" >
                                        <div class="p-2 bd-highlight">
                                            <h5>{{ $d->name }}</h5>
                                            <p style="margin-top: -10px;">{{ $d->model }} {{ $d->trim }}</p>
                                            <p style="margin-top: -15px;font-size:15px;">{{ $d->wheels }} | {{ $d->internal }}<br>
                                            {{ $d->milage }} mile odometer<br>
                                        Available for local delivery in {{ $d->delivery }}</p>
                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="d-flex align-items-end flex-column bd-highlight mb-3">
                                        <div class="p-2 bd-highlight">
                                            <h5 align="right">${{ $d->fee }}</h5>
                                            <a style="font-size: 15px;"  data-bs-toggle="collapse" href="#detail{{ $d->id }}" aria-expanded="false" aria-controls="multiCollapseExample1">Show Details</a>
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
                                        <img src="{{ asset('storage/'.$d->image) }}" alt="" class="img-fluid rounded-start">
                                    </div>
                                    <div class="d-flex justify-content-evenly">
                                        <p>{{ $d->startspeed }}</p>
                                        <p>{{ $d->topspeed }}</p>
                                        <p>{{ $d->range }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ asset('img/Interior.png') }}" alt="" class="img-fluid rounded-start">
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
