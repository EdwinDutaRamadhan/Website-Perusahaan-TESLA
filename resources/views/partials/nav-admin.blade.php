<nav class="navbars navbar navbar-expand-sm navbar-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand ms-2" href="/">T E S L A</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
        </div>
        <div class="navbar-brand justify-content-right" id="collapsibleNavbar">
            <ul class="navbar-nav">
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li>
                        <form action="/admin/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="bi bi-box-arrow-right"></i>Logout
                            </button>
                        </form>
                      </li>
                    </ul>
                  </li>
                @else
                    <li class="nav-item ms-2 me-2">
                        <a class="nav-link" href="/admin/login/edwin123">login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>