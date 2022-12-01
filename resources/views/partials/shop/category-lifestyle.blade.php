<div class="container-fluid">
    @if(isset($data1) and count($data1) > 0)
        <h5>Bags</h5>
        <div class="row m-2">
            @foreach ($data1 as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
    @endif
    
    @if(isset($data2) and count($data2) > 0)
        <h5>Drinkware</h5>
        <div class="row m-2">
            @foreach ($data2 as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
    @endif

    {{-- Mini Teslas --}}
    @if (isset($data3) and count($data3) > 0)
    <h5>Mini Teslas</h5>
    <div class="row m-2">
        @foreach ($data3 as $d)
            @include('partials.shop.section-card')
        @endforeach
    </div>
    @endif

    {{-- Outdoor and Tech --}}
    @if (isset($data4) and count($data4) > 0)
    <h5>Outdoor and Tech</h5>
    <div class="row m-2">
        @foreach ($data4 as $d)
            @include('partials.shop.section-card')
        @endforeach
    </div>
    @endif
</div>