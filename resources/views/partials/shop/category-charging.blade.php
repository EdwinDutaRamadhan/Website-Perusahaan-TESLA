<div class="container-fluid">
    @if(isset($data1) and count($data1)>0)
        <h5>At Home</h5>
        <div class="row m-2">
            @foreach ($data1 as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
    @endif
    @if(isset($data2) and count($data2)>0)
        <h5>On the Road</h5>
        <div class="row m-2">
            @foreach ($data2 as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
    @endif
    @if (isset($data3) and count($data3)>0)
    <h5>Parts</h5>
    <div class="row m-2">
        @foreach ($data3 as $d)
            @include('partials.shop.section-card')
        @endforeach
    </div>
    @endif
</div>