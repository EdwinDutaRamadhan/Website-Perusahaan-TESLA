<div class="container-fluid">
    @if(App\Models\Shop::where('model', 'Women')->first())
    <h3 class="m-4 mt-5 mb-5">Women</h3>
    @endif
    <div class="m-2">
        
        {{-- Tees --}}
        @if(isset($womenTees) and count($womenTees) > 0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Tees</p>
        <div class="row m-2">
            @foreach ($womenTees as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        @endif()

        {{-- Sweathshirts and Hoodies --}}
        @if(isset($womenHoodies) and count($womenHoodies) > 0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Sweathshirts and Hoodies</p>
        <div class="row m-2">
            @foreach ($womenHoodies as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        @endif

        {{-- Onesies --}}
        @if (isset($womenOnesies) and count($womenOnesies) > 0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Onesies</p>
        <div class="row m-2">
                @foreach ($womenOnesies as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif

        {{-- Outwear --}}
        @if (isset($womenOuterwear) and count($womenOuterwear) > 0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Outerwear</p>
        <div class="row m-2">
                @foreach ($womenOuterwear as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif

        {{-- Joggers --}}
        @if (isset($womenJoggers) and count($womenJoggers) > 0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Joggers</p>
        <div class="row m-2">
                @foreach ($womenJoggers as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif

        {{-- Hats --}}
        @if (isset($womenHats) and count($womenHats) > 0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Hats</p>
        <div class="row m-2">
                @foreach ($womenHats as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif
        
        {{-- Socks --}}
        @if (isset($womenSocks) and count($womenSocks) > 0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Socks</p>
        <div class="row m-2">
                @foreach ($womenSocks as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif
    </div>
</div>
