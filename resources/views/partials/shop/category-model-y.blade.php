<div class="container-fluid">
    <h2>Model Y</h2>
    <div class="m-2">
        <h5>Interior</h5>
        <div class="row m-2">
            @foreach ($modelXInterior as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        <h5>Eksterior</h5>
        <div class="row m-2">
            @foreach ($modelXEksterior as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        <h5>Wheels and Tires</h5>
        <div class="row m-2">
            @if (isset($modelXWheels))
                @foreach ($modelXWheels as $d)
                    @include('partials.shop.section-card')
                @endforeach
            @endif
        </div>
        <h5>Floor Mats</h5>
        <div class="row m-2">
            @if (isset($modelXFloor))
                @foreach ($modelXFloor as $d)
                    @include('partials.shop.section-card')
                @endforeach
            @endif
        </div>
        <h5>Keys</h5>
        <div class="row m-2">
            @if (isset($modelXKeys))
                @foreach ($modelXKeys as $d)
                    @include('partials.shop.section-card')
                @endforeach
            @endif
        </div>
    </div>
</div>
