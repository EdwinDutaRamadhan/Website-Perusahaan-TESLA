@extends('layout.tesla-custom')
@section('container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <h1>Inventory</h1>
                <form name="myform" action="/inventory/" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-ms-12">
                            <input onclick="submitform();" type="radio" name="sortmodel" value="Model S" id="model-s" {{ (isset($sortmodel) && $sortmodel == 'Model S')? "checked" : ""; }}>
                            <label for="model-s">Model S</label>
                        </div>
                        <div class="col-ms-12">
                            <input onclick="submitform();" type="radio" name="sortmodel" value="Model 3" id="model-3" {{ (isset($sortmodel) && $sortmodel == 'Model 3')? "checked" : ""; }}>
                            <label for="model-3">Model 3</label>
                        </div>
                        <div class="col-ms-12">
                            <input onclick="submitform();" type="radio" name="sortmodel" value="Model X" id="model-x" {{ (isset($sortmodel) && $sortmodel == 'Model X')? "checked" : ""; }}>
                            <label for="model-x">Model X</label>
                        </div>
                        <div class="col-ms-12">
                            <input onclick="submitform();" type="radio" name="sortmodel" value="Model Y" id="model-y" {{ (isset($sortmodel) && $sortmodel == 'Model Y')? "checked" : ""; }}>
                            <label for="model-y">Model Y</label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-10">
                <h6>Cars</h6>
                <div class="row p-1">
                    @foreach ($data as $d)
                        <div class="card col-5 p-3 m-4">
                            <div class="d-flex justify-content-between">
                                <h5>{{ $d->name }}</h5>
                                <h5></h5>
                                <h5>${{ $d->fee }}</h5>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="text-muted">
                                    {{ $d->trim }}<br>
                                    Available for local delivery in {{ $d->delivery }}
                                </p>
                                <p></p>
                                <p>${{ round((1.05 * $d->fee)/72) }} /mo <span class="text-muted" data-bs-toggle="tooltip"
                                        title="${{ round((1.05 * $d->fee)-($d->fee)) }} down | 72 mo | 5% APR">&#128712;</span></p>
                            </div>

                            <img src="{{ asset('storage/' . $d->image) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="d-flex justify-content-evenly">
                                    <p><b>{{ $d->startspeed }}</b>s</p>
                                    <p><b>{{ $d->topspeed }}</b>mph</p>
                                    <p><b>{{ $d->range }}</b>mi</p>
                                </div>
                                <div class="d-flex justify-content-evenly" style="margin-top: -18px;">
                                    <p class="text-muted">&nbsp;&nbsp; &nbsp;0-60 mph</p>
                                    <p class="text-muted">Top Speed</p>
                                    <p class="text-muted">range (EPA est.)</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="text-muted name-size">{{ $d->color }}</p>
                                    <p></p>
                                    <p class="text-muted name-size">{{ $d->autopilot }}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="text-muted name-size">{{ $d->wheels }}</p>
                                    <p></p>
                                    <p class="text-muted name-size">{{ $d->trial }} Premium Connectivity Trial</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="/inventory/detail/{{ $d->id }}" class="btn btn-outline-dark">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;View Details&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
