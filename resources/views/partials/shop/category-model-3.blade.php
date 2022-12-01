<div class="container-fluid">
    @if(App\Models\Shop::where('model', 'Model 3')->first())
    <h3  class="m-4 mt-5 mb-5">Model 3</h3>
    @endif
    <div class="m-2">
        {{-- Interior --}}
        @if(isset($model3Interior) and count($model3Interior)>0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Interior</p>
        <div class="row m-2">
            @foreach ($model3Interior as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        @endif

        {{-- Eksterior --}}
        @if(isset($model3Eksterior) and count($model3Eksterior)>0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Eksterior</p>
        <div class="row m-2">
            @foreach ($model3Eksterior as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        @endif

        {{-- Wheels and Tires --}}
        @if(isset($model3Wheels) and count($model3Wheels)>0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Wheels and Tires</p>
        <div class="row m-2">
                @foreach ($model3Wheels as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif

        {{-- Floor Mats --}}
        @if(isset($model3Floor) and count($model3Floor)>0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Floor Mats</p>
        <div class="row m-2">
                @foreach ($model3Floor as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif

        {{-- Keys --}}
        @if(isset($model3Keys) and count($model3Keys)>0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Keys</p>
        <div class="row m-2">
                @foreach ($model3Keys as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif
    </div>
</div>
