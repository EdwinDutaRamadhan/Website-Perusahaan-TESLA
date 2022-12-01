<div class="container-fluid">
    @if(isset($data1) and count($data1)>0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">At Home</p>
        <div class="row m-2">
            @foreach ($data1 as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
    @endif
    @if(isset($data2) and count($data2)>0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">On the Road</p>
        <div class="row m-2">
            @foreach ($data2 as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
    @endif
    @if (isset($data3) and count($data3)>0)
    <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Parts</p>
    <div class="row m-2">
        @foreach ($data3 as $d)
            @include('partials.shop.section-card')
        @endforeach
    </div>
    @endif
</div>