<div class="container-fluid">
    <div class="container ms-2 ps-4">
        <a href="/inventory/detail/{{ Crypt::encryptString($d->id) }}" style="text-decoration: none;color:black;font-size:15px;">&#8617;
            Go Back</a>
        <h2 class="mt-4 text-center">Your {{ $d->model }}</h2>

        <div class="m-2 p-2">
            <p>{{ $d->trim }}</p>
            <p style="margin-top: -10px;">{{ $d->color }}</p>
            <p style="margin-top: -10px;">{{ $d->wheels }}</p>
            <p style="margin-top: -10px;">{{ $d->internal }}</p>
            <p style="margin-top: -10px;">{{ $d->autopilot }}</p>
            @if ($d->additional != null)
                <p style="margin-top: -10px;">{{ $d->additional }}</p>
            @endif
            @if ($d->seatlayout != null)
                <p style="margin-top: -10px;">{{ $d->seatlayout }}</p>
            @endif
            <p style="margin-top: -10px;">{{ $d->trial }} Premium Connectivity Trial</p>
        </div>
        <div class="m-2 p-2">
            <p>
                <a id="detail" onclick="detail();" style="text-decoration: none;color:black;font-size:14px;" class="" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button"
                    aria-expanded="false" aria-controls="multiCollapseExample1">&#10009; Show Details</a>
            </p>
            <div class="row">
                <div class="col">
                    <div class="collapse multi-collapse" id="multiCollapseExample1">
                        <div class="d-flex justify-content-between">
                            <p><b>Purchase Price</b></p>
                            <p></p>
                            <p><b>${{ $d->fee }}</b></p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <p>Est. 6-year gas savings<br>Potential Savings*</p>
                            <p></p>
                            <p>- $7,800<br>- $7,800</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <p>Price after Est. Savings</p>
                            <p></p>
                            <p>${{ ($d->fee - 7800) }}</p>
                        </div>
                        <p>All savings are experienced after purchase.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-2 p-2">
            <div class="d-flex justify-content-between">
                <p><b>Purchase Price</b><br>Price after Est. Savings</p>
                <p></p>
                <p><b>${{ $d->fee }}</b><br>${{ ($d->fee - 7800) }}</p>
            </div>
        </div>
        <div class="m-2 p-2">
            <div class="d-flex justify-content-between">
                <p><b>Due Today</b></p>
                <p></p>
                <p><b>$250</p>
            </div>
        </div>
    </div>
</div>
