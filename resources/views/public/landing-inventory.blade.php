@extends('layout.tesla-custom')
@section('container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <h1>Inventory</h1>
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
                        <p>${{ round($d->fee / 72) }} /mo <span class="text-muted" data-bs-toggle="tooltip"
                                title="${{ round($d->fee * 5/100) }} down | 72 mo | 5% APR">&#128712;</span></p>
                    </div>

                    <img src="{{ asset('img/cars/' . $d->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="d-flex justify-content-evenly">
                            <p><b>{{ $d->startspeed }}</b>s</p>
                            <p><b>{{ $d->topspeed }}</b>mph</p>
                            <p><b>{{ $d->range }}</b>mi</p>
                        </div>
                        <div class="d-flex justify-content-evenly" style="margin-top: -18px;">
                            <p class="text-muted" style="font-size: 13px;" >&nbsp;&nbsp; &nbsp;0-60 mph</p>
                            <p class="text-muted" style="font-size: 13px;" >Top Speed</p>
                            <p class="text-muted" style="font-size: 13px;">range (EPA est.)</p>
                        </div>
                        <div class="d-flex justify-content-evenly">
                            <p class="text-muted">{{ $d->ekpaint }} paint</p>
                            <p></p>
                            <p class="text-muted">{{ $d->autopilot }}</p>
                        </div>
                        <div class="d-flex justify-content-evenly">
                            <p class="text-muted">{{ $d->wheels }} paint</p>
                            <p></p>
                            <p class="text-muted">30-Day Premium <br> Connectivity Trial</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <form action="" method="post">
                            @csrf
                            <input type="submit"class="btn btn-outline-dark" value="&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;View Details&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;"></input>
                        </form>
                    </div>
                </div>
                  @endforeach
                </div>
                {{-- @foreach ($data as $d)
                    <div class="card col-md-6 p-3">
                        <div class="d-flex justify-content-between">
                            <h5>{{ $d->name }}</h5>
                            <h5></h5>
                            <h5>${{ $d->fee }}</h5>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="text-muted">
                                {{ $d->model }} {{ $d->trim }}<br>
                                Available for local delivery in {{ $d->delivery }}
                            </p>
                            <p></p>
                            <p>${{ round($d->fee / 72) }} /mo <span class="text-muted" data-bs-toggle="tooltip"
                                    title="${{ round($d->fee * 5/100) }} down | 72 mo | 5% APR">&#128712;</span></p>
                        </div>

                        <img src="{{ asset('img/cars/' . $d->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="d-flex justify-content-evenly">
                                <p><b>{{ $d->startspeed }}</b>s</p>
                                <p><b>{{ $d->topspeed }}</b>mph</p>
                                <p><b>{{ $d->range }}</b>mi</p>
                            </div>
                            <div class="d-flex justify-content-evenly" style="margin-top: -18px;">
                                <p class="text-muted" style="font-size: 13px;" >&nbsp;&nbsp; &nbsp;0-60 mph</p>
                                <p class="text-muted" style="font-size: 13px;" >Top Speed</p>
                                <p class="text-muted" style="font-size: 13px;">range (EPA est.)</p>
                            </div>
                            <div class="d-flex justify-content-evenly">
                                <p class="text-muted">{{ $d->ekpaint }} paint</p>
                                <p></p>
                                <p class="text-muted">{{ $d->autopilot }}</p>
                            </div>
                            <div class="d-flex justify-content-evenly">
                                <p class="text-muted">{{ $d->wheels }} paint</p>
                                <p></p>
                                <p class="text-muted">30-Day Premium <br> Connectivity Trial</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <form action="" method="post">
                                @csrf
                                <input type="submit"class="btn btn-outline-dark" value="&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;View Details&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;"></input>
                            </form>
                        </div>
                    </div>
                    
                @endforeach --}}
            </div>
        </div>
    </div>
@endsection
