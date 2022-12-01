<div class="container-fluid">
    <h2>Women</h2>
    <div class="m-2">
        
        {{-- Tees --}}
        @if(isset($womenTees) and count($womenTees) > 0)
        <h5>Tees</h5>
        <div class="row m-2">
            @foreach ($womenTees as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        @endif()

        {{-- Sweathshirts and Hoodies --}}
        @if(isset($womenHoodies) and count($womenHoodies) > 0)
        <h5>Sweathshirts and Hoodies</h5>
        <div class="row m-2">
            @foreach ($womenHoodies as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        @endif

        {{-- Onesies --}}
        @if (isset($womenOnesies) and count($womenOnesies) > 0)
        <h5>Onesies</h5>
        <div class="row m-2">
                @foreach ($womenOnesies as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif

        {{-- Outwear --}}
        @if (isset($womenOuterwear) and count($womenOuterwear) > 0)
        <h5>Outerwear</h5>
        <div class="row m-2">
                @foreach ($womenOuterwear as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif

        {{-- Joggers --}}
        @if (isset($womenJoggers) and count($womenJoggers) > 0)
        <h5>Joggers</h5>
        <div class="row m-2">
                @foreach ($womenJoggers as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif

        {{-- Hats --}}
        @if (isset($womenHats) and count($womenHats) > 0)
        <h5>Hats</h5>
        <div class="row m-2">
                @foreach ($womenHats as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif
        
        {{-- Socks --}}
        @if (isset($womenSocks) and count($womenSocks) > 0)
        <h5>Socks</h5>
        <div class="row m-2">
                @foreach ($womenSocks as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif
    </div>
</div>
