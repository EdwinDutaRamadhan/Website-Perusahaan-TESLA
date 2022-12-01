<div class="container-fluid">
    <h2>Kids</h2>
    <div class="m-2">
        
        {{-- Tees --}}
        @if(isset($kidsTees) and count($kidsTees) > 0)
        <h5>Tees</h5>
        <div class="row m-2">
            @foreach ($kidsTees as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        @endif()

        {{-- Sweathshirts and Hoodies --}}
        @if(isset($kidsHoodies) and count($kidsHoodies) > 0)
        <h5>Sweathshirts and Hoodies</h5>
        <div class="row m-2">
            @foreach ($kidsHoodies as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        @endif

        {{-- Onesies --}}
        @if (isset($kidsOnesies) and count($kidsOnesies) > 0)
        <h5>Onesies</h5>
        <div class="row m-2">
                @foreach ($kidsOnesies as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif

        {{-- Outwear --}}
        @if (isset($kidsOuterwear) and count($kidsOuterwear) > 0)
        <h5>Outerwear</h5>
        <div class="row m-2">
                @foreach ($kidsOuterwear as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif

        {{-- Joggers --}}
        @if (isset($kidsJoggers) and count($kidsJoggers) > 0)
        <h5>Joggers</h5>
        <div class="row m-2">
                @foreach ($kidsJoggers as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif

        {{-- Hats --}}
        @if (isset($kidsHats) and count($kidsHats) > 0)
        <h5>Hats</h5>
        <div class="row m-2">
                @foreach ($kidsHats as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif
        
        {{-- Socks --}}
        @if (isset($kidsSocks) and count($kidsSocks) > 0)
        <h5>Socks</h5>
        <div class="row m-2">
                @foreach ($kidsSocks as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif
    </div>
</div>
