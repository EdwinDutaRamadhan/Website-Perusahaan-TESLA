<div class="container-fluid">
    <h5>At Home</h5>
    <div class="row m-2">
        @foreach ($data1 as $d)
            @include('partials.shop.section-card')
        @endforeach
    </div>
    <h5>On the Road</h5>
    <div class="row m-2">
        @foreach ($data2 as $d)
            @include('partials.shop.section-card')
        @endforeach
    </div>
    <h5>Parts</h5>
    <div class="row m-2">
    @if (isset($data3))
        @foreach ($data3 as $d)
            @include('partials.shop.section-card')
        @endforeach
    @endif
    </div>
</div>