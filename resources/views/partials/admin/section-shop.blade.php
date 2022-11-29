<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <!-- Insert Shop Item -->
            @include('partials.admin.section-shop-add')
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insert">
                Launch demo modal
            </button>

        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div>
    <div class="row">
        <div class="m-2">
            @foreach ($data as $d)
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/'.$d->image) }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $d->title }}</h5>
                                <p class="card-text">{{ $d->desc }}</p>
                                <p class="card-text"><small class="text-muted">Last update {{ $d->updated_at }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
