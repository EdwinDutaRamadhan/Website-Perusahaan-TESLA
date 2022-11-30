<div class="container-fluid">
    <h5>Tees</h5>
    <div class="row m-2">
        @foreach ($data1 as $d)
            @include('partials.shop.section-card')
        @endforeach
    </div>
    <h5>Sweathshirts and Hoodies</h5>
    <div class="row m-2">
        @foreach ($data2 as $d)
            @include('partials.shop.section-card')
        @endforeach
    </div>
    <h5>Onesies</h5>
    <div class="row m-2">
    @if (isset($data3))
        @foreach ($data3 as $d)
            @include('partials.shop.section-card')
        @endforeach
    @endif
    </div>
    <h5>Outerwear</h5>
    <div class="row m-2">
    @if (isset($data4))
        @foreach ($data4 as $d)
            @include('partials.shop.section-card')
        @endforeach
    @endif
    </div>
    <h5>Joggers</h5>
    <div class="row m-2">
    @if (isset($data5))
        @foreach ($data5 as $d)
            @include('partials.shop.section-card')
        @endforeach
    @endif
    </div>
    <h5>Hats</h5>
    <div class="row m-2">
    @if (isset($data6))
        @foreach ($data6 as $d)
            @include('partials.shop.section-card')
        @endforeach
    @endif
    </div>
    <h5>Socks</h5>
    <div class="row m-2">
    @if (isset($data7))
        @foreach ($data7 as $d)
            @include('partials.shop.section-card')
        @endforeach
    @endif
    </div>
</div>