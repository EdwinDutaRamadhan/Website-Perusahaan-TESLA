@extends('layout.tesla-solar')
@section('container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <img class="img-fluid" src="{{ asset('img/solar.png') }}" style="margin-left: -1rem; margin-top: -7px;"
                    alt="">
            </div>
            <div class="col-md-3">
                <h2 class="text-center mt-4">Clean Power,<br>Outage Protection</h2>
                <form class="mt-5" action="" method="post">
                    <div class="mb-3">
                        <label for="address" class="form-label text-muted">Home address</label>
                        <input type="text" class="form-control" id="address">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label text-muted">Average Electric Bill</label>
                        <input type="text" class="form-control" id="address">
                    </div>
                    <div class="mb-3">
                        <p class="text-center text-muted">My home is new or being built</p>
                    </div>
                    <div class="mb-2">
                        <input type="button" disabled class="btn btn-primary w-100" id="address" value="Next">
                    </div>
                    <div class="mb-2">
                        <p class="text-muted text-center"><small>We won't spam you in any way</small></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
