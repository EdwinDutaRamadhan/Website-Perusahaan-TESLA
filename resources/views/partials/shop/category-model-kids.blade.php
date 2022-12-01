<div class="container-fluid">
    @if(App\Models\Shop::where('model', 'Kids')->first())
    <h3 class="m-4 mt-5 mb-5">Kids</h3>
    @endif
    <div class="m-2">
        
        {{-- Tees --}}
        @if(isset($kidsTees) and count($kidsTees) > 0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Tees</p>
        <div class="row m-2">
            @foreach ($kidsTees as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        @endif()

        {{-- Sweathshirts and Hoodies --}}
        @if(isset($kidsHoodies) and count($kidsHoodies) > 0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Sweathshirts and Hoodies</p>
        <div class="row m-2">
            @foreach ($kidsHoodies as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        @endif

        {{-- Onesies --}}
        @if (isset($kidsOnesies) and count($kidsOnesies) > 0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Onesies</p>
        <div class="row m-2">
                @foreach ($kidsOnesies as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif

        {{-- Outwear --}}
        @if (isset($kidsOuterwear) and count($kidsOuterwear) > 0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Outerwear</p>
        <div class="row m-2">
                @foreach ($kidsOuterwear as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif

        {{-- Joggers --}}
        @if (isset($kidsJoggers) and count($kidsJoggers) > 0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Joggers</p>
        <div class="row m-2">
                @foreach ($kidsJoggers as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif

        {{-- Hats --}}
        @if (isset($kidsHats) and count($kidsHats) > 0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Hats</p>
        <div class="row m-2">
                @foreach ($kidsHats as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif
        
        {{-- Socks --}}
        @if (isset($kidsSocks) and count($kidsSocks) > 0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Socks</p>
        <div class="row m-2">
                @foreach ($kidsSocks as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif
    </div>
</div>
