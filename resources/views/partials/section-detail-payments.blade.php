<div class="container-fluid">
    <div class="container ms-2 ps-4">
        <h1 align="center">Your {{ $d->model }}</h1>

        <div class="m-2 p-2">
            <p>{{ $d->model }} {{ $d->trim }}</p>
            <p style="margin-top: -10px;">{{ $d->color }}</p>
            <p  style="margin-top: -10px;">{{ $d->wheels }}</p>
            <p  style="margin-top: -10px;">{{ $d->internal }}</p>
            <p  style="margin-top: -10px;">{{ $d->autopilot }}</p>
            @if ($d->additional != null)
                <p  style="margin-top: -10px;">{{ $d->additional }}</p>
            @endif
            @if ($d->seatlayout != null)
                <p  style="margin-top: -10px;">{{ $d->seatlayout }}</p>
            @endif
            <p  style="margin-top: -10px;">{{ $d->trial }} Premium Connectivity Trial</p>
        </div>
        <div class="m-2 p-2">
            
        </div>
    </div>
</div>
