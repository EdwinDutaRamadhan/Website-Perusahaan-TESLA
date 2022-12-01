<div class="container-fluid">
    <h2>Men</h2>
    <div class="m-2">
        
        {{-- Tees --}}
        @if(isset($menTees) and count($menTees) > 0)
        <h5>Tees</h5>
        <div class="row m-2">
            @foreach ($menTees as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        @endif()

        {{-- Sweathshirts and Hoodies --}}
        @if(isset($menHoodies) and count($menHoodies) > 0)
        <h5>Sweathshirts and Hoodies</h5>
        <div class="row m-2">
            @foreach ($menHoodies as $d)
                @include('partials.shop.section-card')
            @endforeach
        </div>
        @endif

        {{-- Onesies --}}
        @if (isset($menOnesies) and count($menOnesies) > 0)
        <h5>Onesies</h5>
        <div class="row m-2">
                @foreach ($menOnesies as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif

        {{-- Outwear --}}
        @if (isset($menOuterwear) and count($menOuterwear) > 0)
        <h5>Outerwear</h5>
        <div class="row m-2">
                @foreach ($menOuterwear as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif

        {{-- Joggers --}}
        @if (isset($menJoggers) and count($menJoggers) > 0)
        <h5>Joggers</h5>
        <div class="row m-2">
                @foreach ($menJoggers as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif

        {{-- Hats --}}
        @if (isset($menHats) and count($menHats) > 0)
        <h5>Hats</h5>
        <div class="row m-2">
                @foreach ($menHats as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif
        
        {{-- Socks --}}
        @if (isset($menSocks) and count($menSocks) > 0)
        <h5>Socks</h5>
        <div class="row m-2">
                @foreach ($menSocks as $d)
                    @include('partials.shop.section-card')
                @endforeach
        </div>
        @endif
    </div>
</div>
