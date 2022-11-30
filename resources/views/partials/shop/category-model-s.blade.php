<div class="container-fluid">
    <h2>Model S</h2>
    <div class="m-2">
        <h5>Interior</h5>
        <div class="row m-2">
            @foreach ($modelSInterior as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        <h5>Eksterior</h5>
        <div class="row m-2">
            @foreach ($modelSEksterior as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        <h5>Wheels and Tires</h5>
        <div class="row m-2">
            @if (isset($modelSWheels))
                @foreach ($modelSWheels as $d)
                    @include('partials.shop.section-card')
                @endforeach
            @endif
        </div>
        <h5>Floor Mats</h5>
        <div class="row m-2">
            @if (isset($modelSFloor))
                @foreach ($modelSFloor as $d)
                    @include('partials.shop.section-card')
                @endforeach
            @endif
        </div>
        <h5>Keys</h5>
        <div class="row m-2">
            @if (isset($modelSKeys))
                @foreach ($modelSKeys as $d)
                    @include('partials.shop.section-card')
                @endforeach
            @endif
        </div>
    </div>
</div>
