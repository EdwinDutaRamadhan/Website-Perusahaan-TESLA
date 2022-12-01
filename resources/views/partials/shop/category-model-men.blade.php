<div class="container-fluid">
    @if(App\Models\Shop::where('model', 'Men')->first())
    <h3 class="m-4 mt-5 mb-5">Men</h3>
    @endif
    <div class="m-2">
        
        {{-- Tees --}}
        @if(isset($menTees) and count($menTees) > 0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Tees</p>
        <div class="row m-2">
            @foreach ($menTees as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        @endif()

        {{-- Sweathshirts and Hoodies --}}
        @if(isset($menHoodies) and count($menHoodies) > 0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Sweathshirts and Hoodies</p>
        <div class="row m-2">
            @foreach ($menHoodies as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        @endif

        {{-- Onesies --}}
        @if (isset($menOnesies) and count($menOnesies) > 0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Onesies</p>
        <div class="row m-2">
                @foreach ($menOnesies as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif

        {{-- Outwear --}}
        @if (isset($menOuterwear) and count($menOuterwear) > 0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Outerwear</p>
        <div class="row m-2">
                @foreach ($menOuterwear as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif

        {{-- Joggers --}}
        @if (isset($menJoggers) and count($menJoggers) > 0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Joggers</p>
        <div class="row m-2">
                @foreach ($menJoggers as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif

        {{-- Hats --}}
        @if (isset($menHats) and count($menHats) > 0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Hats</p>
        <div class="row m-2">
                @foreach ($menHats as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif
        
        {{-- Socks --}}
        @if (isset($menSocks) and count($menSocks) > 0)
        <p class="m-4 mt-5 mb-5" style="font-size: 24px;">Socks</p>
        <div class="row m-2">
                @foreach ($menSocks as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif
    </div>
</div>
