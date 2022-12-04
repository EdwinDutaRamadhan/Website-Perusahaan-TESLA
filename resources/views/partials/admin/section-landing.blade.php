<div class="container-fluid">
    <table class="table">
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
        @foreach ($data as $d)
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/' . $d->image) }}" class="img-fluid rounded-start"
                                    alt="..." style="height: 100%;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">{{ $d->model }}</h5>
                                        <h5 class="card-title"></h5>
                                        <h5 class="card-title">Slide {{ $d->model_id }}</h5>
                                    </div>
                                    <p class="card-text">{{ $d->note }}</p>
                                    <p class="card-text"><small class="text-muted">Last updated
                                            {{ $d->updated_at }}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <form action="/admin/landing/update" method="post">
                        @csrf
                        <input type="hidden" name="image_kw" value="{{ $d->image }}">
                        <input type="hidden" name="id" value="{{ $d->id }}">
                        <input type="hidden" name="model_id" value="{{ $d->model_id }}">
                        <input type="hidden" name="model" value="{{ $d->model }}">
                        <div class="row p-4">
                            <div class="col-2 mt-1">
                                <label style="font-size: 18px;" for="note" class="form-label mb-3">Note : </label>
                                <label style="font-size: 18px;" for="img" class="form-label mb-3">Image </label>

                            </div>
                            <div class="col-10">
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" class="form-control" id="note" name="note"
                                        value="{{ $d->note }}">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <input type="file" class="form-control" id="img" name="img"
                                        value="{{ $d->image }}">
                                </div>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <input class="btn btn-primary" type="submit" value="Update">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
    </table>
</div>
