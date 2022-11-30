<div class="container-fluid">
    <h5>Bags</h5>
    <div class="row m-2">
        @foreach ($data1 as $d)
            @include('partials.shop.section-card')
        @endforeach
    </div>
    <h5>Drinkware</h5>
    <div class="row m-2">
        @foreach ($data2 as $d)
            @include('partials.shop.section-card')
        @endforeach
    </div>
    <h5>Mini Teslas</h5>
    <div class="row m-2">
    @if (isset($data3))
        @foreach ($data3 as $d)
            @include('partials.shop.section-card')
        @endforeach
    @endif
    </div>
    <h5>Outdoor and Tech</h5>
    <div class="row m-2">
    @if (isset($data4))
        @foreach ($data4 as $d)
            @include('partials.shop.section-card')
        @endforeach
    @endif
    </div>
</div>