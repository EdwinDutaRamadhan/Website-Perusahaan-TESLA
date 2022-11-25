<div class="container">
    @include('partials.landing-detail.section-modal')
    <form action="/inventory/detail/payments" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $d->id }}">
        <input type="hidden" name="payments" value="true">
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
        <div class="p-2 mt-5" style="height: 200px;">{{-- Vehicle Details Section --}}
            <h2 align="center">Vehicle Details</h2>
            <div class="m-4 p-2">
                <ul>
                    <li>New Vehicle</li>
                    <li>Under 50 mil</li>
                </ul>
            </div>
        </div>
        <div class="p-2" style="height: 400px;">{{-- Key Featrures Section --}}
            <h2 align="center">Key Features</h2>
            <div class="m-4 p-2">
                <ul>
                    <li>{{ $d->wheels }}</li>
                    <li>{{ $d->internal }}</li>
                    <li>{{ $d->autopilot }}</li>
                    @if ($d->additional != null)
                        <li>{{ $d->additional }}</li>
                    @endif
                    <li>{{ $d->trial }} Premium Connectivity Trial</li>
                </ul>
            </div>
            <div class="d-flex justify-content-center">
                <a href=""></a>
                <a class="btn btn-light" data-bs-toggle="modal" href="#kfmodal" role="button">Feature Details</a>
                <a href=""></a>
            </div>
        </div>
        <div class="p-2" style="height: 400px;">{{-- Enhanced Autopilot Section --}}
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

                <div class="d-flex justify-content-center">
                    <input  onclick="repeaterEA();" type="checkbox" name="enchanced" value="true" class="btn-check" id="btn-check-2-outlined" checked autocomplete="off">
                    <label id="EA" class="btn btn-outline-primary" style="width: 50%" for="btn-check-2-outlined">Add</label><br>
                    <a href=""></a>
                    <a class="btn btn-light" data-bs-toggle="modal" href="#modal1" role="button">Feature Details</a>
                </div>
            </div>
        </div>
        <div class="p-2" style="height: 800px;">{{-- Full Self-Driving Capability Section --}}
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
                {{-- @include('partials.landing-detail.section-modal') --}}
                <div class="d-flex justify-content-center">
                    <input  onclick="repeaterFS();" type="checkbox" name="capability" value="true" class="btn-check" id="btn-check-3-outlined" checked autocomplete="off">
                    <label id="FS" class="btn btn-outline-primary" style="width: 50%" for="btn-check-3-outlined">Add</label><br>
                    <a href=""></a>
                    <a class="btn btn-light" data-bs-toggle="modal" href="#modal1" role="button">Feature Details</a>
                </div>
            </div>
        </div>
        <div class="p-2" style="height: 250px;">{{-- Chraging Section --}}
            <h2 align="center">Charging</h2>
            <div class="form-check">
                <div class="d-flex justify-content-around p-3">
                    <p>
                        <input style="width: 22px;height: 22px;margin-top:2px;" class="form-check-input" type="checkbox"
                            name="charging" value="400" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            &nbsp;&nbsp;Wall Connector
                        </label>
                    </p>
                    <p></p>
                    <p><b>$400</b></p>
                </div>
                <p align="center" class="text-muted" style="margin-top: -25px;font-size: 15px;">
                    Mobile Connector included with the vehicle&nbsp;&nbsp;&nbsp;
                </p>
            </div>
            <div class="d-flex justify-content-center">
                <a href=""></a>
                <a class="mt-2 btn btn-light" data-bs-toggle="modal" href="#cmodal" role="button">Learn More</a>
                <a href=""></a>
            </div>
        </div>
        <div class="p-2" style="height: 300px;">{{-- Warranty Section --}}
            <div align="center" class="mb-2">
                <h2>Warranty</h2>
                <h6>Limited Warranty</h6>
                <p class="text-muted">July 2026 / 50,000 total miles</p>
            </div>
            <div align="center">
                <h6>Battery and Drive Unit Limited Warrany</h6>
                <p class="text-muted">July 2030 / 120,000 total miles</p>
            </div>
            <div class="d-flex justify-content-center">
                <a href=""></a>
                <a class="mt-2 btn btn-light" data-bs-toggle="modal" href="#wmodal" role="button">Learn More</a>
                <a href=""></a>
            </div>
        </div>
        <div class="p-2" style="height: 250px;">{{-- Condition Section --}}
            <h2 align="center">Condition</h2>
            <ul>
                <li>Meets Tesla's cosmetic and mechanical standards</li>
            </ul>
            <div class="d-flex justify-content-center">
                <a href=""></a>
                <a class="mt-2 btn btn-light" data-bs-toggle="modal" href="#cdmodal" role="button">Learn More</a>
                <a href=""></a>
            </div>
        </div>
        <div class="p-2" style="height: 250px;">{{-- Order Section --}}
            <div align="center">
                <h2 class="mb-4">Order Your {{ $d->model }}</h2>
                <input style="width: 80%;" class="btn btn-primary" type="submit" value="Continue to Payment">
            </div>
        </div>
    </form>
</div>
