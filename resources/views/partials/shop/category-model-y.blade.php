<div class="container-fluid">
    <h2>Model Y</h2>
    <div class="m-2">
        <h5>Interior</h5>
        <div class="row m-2">
            @foreach ($modelYInterior as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        <h5>Eksterior</h5>
        <div class="row m-2">
            @foreach ($modelYEksterior as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        <h5>Wheels and Tires</h5>
        <div class="row m-2">
            @if (isset($modelYWheels))
                @foreach ($modelYWheels as $d)
                    @include('partials.shop.section-card')
                @endforeach
            @endif
        </div>
        <h5>Floor Mats</h5>
        <div class="row m-2">
            @if (isset($modelYFloor))
                @foreach ($modelYFloor as $d)
                    @include('partials.shop.section-card')
                @endforeach
            @endif
        </div>
        <h5>Keys</h5>
        <div class="row m-2">
            @if (isset($modelYKeys))
                @foreach ($modelYKeys as $d)
                    @include('partials.shop.section-card')
                @endforeach
            @endif
        </div>
    </div>
</div>
