<div class="container">
    <form action="" method="post">
        @csrf
        {{-- Header Section --}}
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
        <div class="mt-5 mb-5">{{-- Vehicle Details Section --}}
            <h2 align="center">Vehicle Details</h2>
            <div class="m-4 p-2">
                <ul>
                    <li>New Vehicle</li>
                    <li>Under 50 mil</li>
                </ul>
            </div>
        </div>
        <div class="mt-5 mb-5">{{-- Key Featrures Section --}}
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
        <div class="mt-5 mb-5">{{-- Enhanced Autopilot Section --}}
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
        <div class="mt-5 mb-5">{{-- Full Self-Driving Capability Section --}}
            <h2 align="center">Full Self-Driving<br> Capability</h2>
            <p align="center" class="text-muted">$15000</p>
            <div class="m-4 p-2">
                <ul>
                    <li>All functionality of Basic Autopilot and Enhanced Autopilot</li>
                    <li>Traffic Light and Stop Sign Control</li>
                    <h6 class="mt-4 mb-2">Coming Soon</h6>
                    <li>Autosteer on city streets</li>
                    <p class="text-muted"><br>The currently enabled features require active driver supervision and do
                        not make the vehicle autonomous. The activation and use of these features are dependent on
                        achieving reliability far in excess of human drivers as demonstrated by billions of miles of
                        experience, as well as regulatory approval, which may take longer in some jurisdictions. As
                        these self-driving features evolve, your car will be continuously upgraded through over-the-air
                        software updates.</p>
                </ul>
                @include('partials.section-modal')
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary ps-5 pe-5">Add</button>
                    <a href=""></a>
                    <a class="btn btn-light" data-bs-toggle="modal" href="#modal1" role="button">Feature Details</a>
                </div>
            </div>
        </div>
        <div class="mt-5 mb-5">
            <h2 align="center">Charging</h2>
            <div class="form-check">
                <div class="d-flex justify-content-around p-3">
                    <p>
                        <input class="form-check-input" type="checkbox" name="charnging" value="400" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Wall Connector
                      </label>
                    </p>
                      <p></p>
                      <p><b>$400</b></p>
                </div>
                
              </div>
    </form>
</div>
