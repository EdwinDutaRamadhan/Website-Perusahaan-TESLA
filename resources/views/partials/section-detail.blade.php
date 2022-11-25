<div class="container">
    <h1 align="center">{{ $d->model }}</h1>
    <div class="m-4 p-2">
        <h6 align="center">{{ $d->model }} {{ $d->trim }}</h6>
    </div>
    <div class="d-flex justify-content-evenly">
        <p><b style="font-size: 22px;">{{ $d->range }}</b>mi</p>
        <p><b style="font-size: 22px;">{{ $d->topspeed }}</b>mph</p>
        <p><b style="font-size: 22px;">{{ $d->startspeed }}</b>sec</p>
    </div>
    <div class="d-flex justify-content-evenly" style="margin-top: -10px;">
        <p class="text-muted">range (EPA est.)</p>
        <p class="text-muted">Top Speed</p>
        <p class="text-muted">0-60 mph&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    </div>
    <div class="mt-5 mb-5">
        <h2 align="center">Vehicle Details</h2>
        <div class="m-4 p-2">
            <ul>
                <li>New Vehicle</li>
                <li>Under 50 mil</li>
            </ul>
        </div>
    </div>
    <div class="mt-5">
        <h2 align="center">Key Features</h2>
        <div class="m-4 p-2">
            <ul>
                <li>{{ $d->wheels }}</li>
                <li>{{ $d->internal }}</li>
                <li>{{ $d->autopilot }}</li>
                <li>{{ $d->additional }}</li>
                <li>{{ $d->trial }}</li>
            </ul>
        </div>
    </div>
    <div class="mt-5">
        <h2 align="center">Enhanced Autopilot</h2>
        <p align="center" class="text-muted">$6000</p>
        <div class="m-4 p-2">
            <ul>
                <li>Navigate on Autopilot</li>
                <li>Auto Lane Change</li>
                <li>Autopark</li>
                <li>Summon</li>
                <li>Smart Summon</li>
            </ul>
            @include('partials.section-modal')
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary ps-5 pe-5">Add</button>
                <a href=""></a>
                <a class="btn btn-light" data-bs-toggle="modal" href="#modal1" role="button">Feature Details</a>
            </div>
            
        </div>
    </div>