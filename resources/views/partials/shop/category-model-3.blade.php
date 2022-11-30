<div class="container-fluid">
    <h2>Model 3</h2>
    <div class="m-2">
        <h5>Interior</h5>
        <div class="row m-2">
            @foreach ($model3Interior as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        <h5>Eksterior</h5>
        <div class="row m-2">
            @foreach ($model3Eksterior as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        <h5>Wheels and Tires</h5>
        <div class="row m-2">
            @if (isset($model3Wheels))
                @foreach ($model3Wheels as $d)
                    @include('partials.shop.section-card')
                @endforeach
            @endif
        </div>
        <h5>Floor Mats</h5>
        <div class="row m-2">
            @if (isset($model3Floor))
                @foreach ($model3Floor as $d)
                    @include('partials.shop.section-card')
                @endforeach
            @endif
        </div>
        <h5>Keys</h5>
        <div class="row m-2">
            @if (isset($model3Keys))
                @foreach ($model3Keys as $d)
                    @include('partials.shop.section-card')
                @endforeach
            @endif
        </div>
    </div>
</div>
