<div class="container-fluid">
    @if(App\Models\Shop::where('model', 'Model S')->first())
    <h3  class="m-4 mt-5 mb-5">Model S</h3>
    @endif
    <div class="m-2">
        {{-- Interior --}}
        @if(isset($modelSInterior) and count($modelSInterior)>0)
        <p class="m-4" style="font-size: 24px;">Interior</p>
        <div class="row m-2">
            @foreach ($modelSInterior as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        @endif

        {{-- Eksterior --}}
        @if(isset($modelSEksterior) and count($modelSEksterior)>0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Eksterior</p>
        <div class="row m-2">
            @foreach ($modelSEksterior as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        @endif

        {{-- Wheels and Tires --}}
        @if(isset($modelSWheels) and count($modelSWheels)>0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Wheels and Tires</p>
        <div class="row m-2">
                @foreach ($modelSWheels as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif

        {{-- Floor Mats --}}
        @if(isset($modelSFloor) and count($modelSFloor)>0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Floor Mats</p>
        <div class="row m-2">
                @foreach ($modelSFloor as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif

        {{-- Keys --}}
        @if(isset($modelSKeys) and count($modelSKeys)>0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Keys</p>
        <div class="row m-2">
                @foreach ($modelSKeys as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif
    </div>
</div>
