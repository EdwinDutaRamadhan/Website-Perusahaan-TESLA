<div class="container-fluid">
    @if(App\Models\Shop::where('model', 'Model X')->first())
    <h3  class="m-4 mt-5 mb-5">Model X</h3>
    @endif
    <div class="m-2">
        {{-- Interior --}}
        @if(isset($modelXInterior) and count($modelXInterior)>0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Interior</p>
        <div class="row m-2">
            @foreach ($modelXInterior as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        @endif

        {{-- Eksterior --}}
        @if(isset($modelXEksterior) and count($modelXEksterior)>0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Eksterior</p>
        <div class="row m-2">
            @foreach ($modelXEksterior as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        @endif

        {{-- Wheels and Tires --}}
        @if(isset($modelXWheels) and count($modelXWheels)>0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Wheels and Tires</p>
        <div class="row m-2">
                @foreach ($modelXWheels as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif

        {{-- Floor Mats --}}
        @if(isset($modelXFloor) and count($modelXFloor)>0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Floor Mats</p>
        <div class="row m-2">
                @foreach ($modelXFloor as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif

        {{-- Keys --}}
        @if(isset($modelXKeys) and count($modelXKeys)>0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Keys</p>
        <div class="row m-2">
                @foreach ($modelXKeys as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif
    </div>
</div>
