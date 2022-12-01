<div class="container-fluid">
    @if(App\Models\Shop::where('model', 'Model Y')->first())
    <h3  class="m-4 mt-5 mb-5">Model Y</h3>
    @endif
    <div class="m-2">
        {{-- Interior --}}
        @if(isset($modelYInterior) and count($modelYInterior)>0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Interior</p>
        <div class="row m-2">
            @foreach ($modelYInterior as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        @endif

        {{-- Eksterior --}}
        @if(isset($modelYEksterior) and count($modelYEksterior)>0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Eksterior</p>
        <div class="row m-2">
            @foreach ($modelYEksterior as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        @endif

        {{-- Wheels and Tires --}}
        @if(isset($modelYWheels) and count($modelYWheels)>0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Wheels and Tires</p>
        <div class="row m-2">
                @foreach ($modelYWheels as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif

        {{-- Floor Mats --}}
        @if(isset($modelYFloor) and count($modelYFloor)>0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Floor Mats</p>
        <div class="row m-2">
                @foreach ($modelYFloor as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif

        {{-- Keys --}}
        @if(isset($modelYKeys) and count($modelYKeys)>0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Keys</p>
        <div class="row m-2">
                @foreach ($modelYKeys as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif
    </div>
</div>
