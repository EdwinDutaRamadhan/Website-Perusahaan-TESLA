<nav id="navbar-id" class="navbars navbar navbar-expand-md bg-light navbar-light sticky-top">
    <div class="container-fluid">
        <div>
            <a class="navbar-brand" href="/">T E S L A </a>
            <a class="navbar-brand" href="/shop"> Shop </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item ms-2 me-2">
                    <a class="nav-link" href="/shop/category/charging">Charging</a>
                </li>
                <li class="nav-item ms-2 me-2">
                    <a class="nav-link" href="/shop/category/vehicle-accessories">Vehicle Accessories</a>
                </li>
                <li class="nav-item ms-2 me-2">
                    <a class="nav-link" href="/shop/category/apparel">Apparel</a>
                </li>
                <li class="nav-item ms-2 me-2">
                    <a class="nav-link" href="/shop/category/lifestyle">Lifestyle</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @if(isset(auth()->user()->role) and auth()->user()->role == 'User')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person"> </i>My Account</a></li>
                            <li><a class="dropdown-item" href="/shop/cart/{{ Crypt::encryptString(auth()->user()->id) }}"><i class="bi bi-cart">  </i>Cart <span class="badge bg-primary rounded-pill ms-1">{{ (count(auth()->user()->carts) == 0)? "": count(auth()->user()->carts); }}</span></a></li>
                            <li><a href="/shop/order/{{ Crypt::encryptString(auth()->user()->id) }}" class="dropdown-item"><i class="bi bi-bag"> </i>Order <span class="badge bg-primary rounded-pill ms-1">{{ (count(auth()->user()->orders) == 0)? "": count(auth()->user()->orders); }}</span></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/admin/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="bi bi-box-arrow-right"> </i>Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item ms-2 me-2">
                        <a class="nav-link" href="/shop/login">login</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
