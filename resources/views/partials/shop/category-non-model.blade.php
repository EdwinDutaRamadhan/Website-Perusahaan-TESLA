<div class="container-fluid">
    <h5>{{ isset($title1) ? $title1 : '' }}</h5>
    <div class="row m-2">
        @foreach ($data1 as $d)
            @include('partials.shop.section-card')
        @endforeach
    </div>
    <h5>{{ isset($title2) ? $title2 : '' }}</h5>
    <div class="row m-2">
        @foreach ($data2 as $d)
            @include('partials.shop.section-card')
        @endforeach
    </div>
    <h5>{{ isset($title3) ? $title3 : '' }}</h5>
    <div class="row m-2">
    @if (isset($data3))
        @foreach ($data3 as $d)
            @include('partials.shop.section-card')
        @endforeach
    @endif
    </div>
    <h5>{{ isset($title4) ? $title4 : '' }}</h5>
    <div class="row m-2">
    @if (isset($data4))
        @foreach ($data4 as $d)
            @include('partials.shop.section-card')
        @endforeach
    @endif
    </div>
    <h5>{{ isset($title5) ? $title5 : '' }}</h5>
    <div class="row m-2">
    @if (isset($data5))
        @foreach ($data5 as $d)
            @include('partials.shop.section-card')
        @endforeach
    @endif
    </div>
    <h5>{{ isset($title6) ? $title6 : '' }}</h5>
    <div class="row m-2">
    @if (isset($data6))
        @foreach ($data6 as $d)
            @include('partials.shop.section-card')
        @endforeach
    @endif
    </div>
    <h5>{{ isset($title7) ? $title7 : '' }}</h5>
    <div class="row m-2">
    @if (isset($data7))
        @foreach ($data7 as $d)
            @include('partials.shop.section-card')
        @endforeach
    @endif
    </div>
</div>