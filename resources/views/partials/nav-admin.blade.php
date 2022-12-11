<nav class="navbars navbar navbar-expand-sm navbar-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand ms-2" href="/">
            <svg width="121" height="25" viewBox="0 0 121 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1205_172)">
                    <path
                        d="M0.105225 6.21087C0.256369 6.80308 0.564198 7.34367 0.99638 7.77585C1.42856 8.20804 1.96915 8.51587 2.56136 8.66701H6.42101L6.59645 8.7021V18.3863H8.98242V8.73718L9.22803 8.63192H13.0877C13.6782 8.47739 14.217 8.16843 14.6487 7.73678C15.0803 7.30513 15.3893 6.76635 15.5438 6.17578L0.105225 6.17578V6.21087ZM83.8245 6.21087H81.4386V18.4214H92.3859C92.9047 18.2253 93.3676 17.9054 93.7346 17.4896C94.1015 17.0738 94.3612 16.5746 94.4912 16.0354H83.8596V6.17578L83.8245 6.21087ZM65.4736 8.59683C66.7368 8.24596 67.7894 7.2635 68.0701 6.17578L54.7017 6.21087V13.4389H65.614V15.9653H57.0526C56.3989 16.1353 55.7888 16.4422 55.2626 16.8656C54.7363 17.289 54.306 17.8193 54 18.4214H68V11.053H57.0526V8.59683H65.4736ZM106.246 18.4214H108.596V13.5091H117.228V18.4214H119.579V11.053H106.246V18.4214ZM30.0351 8.63192H39.1579C39.7582 8.48991 40.308 8.18575 40.7473 7.75263C41.1866 7.31951 41.4986 6.77406 41.6491 6.17578L27.5789 6.17578C27.7266 6.76968 28.0332 7.31212 28.466 7.74486C28.8987 8.17759 29.4412 8.48426 30.0351 8.63192ZM30.0351 13.474H39.1579C39.7582 13.332 40.308 13.0279 40.7473 12.5947C41.1866 12.1616 41.4986 11.6162 41.6491 11.0179H27.5789C27.7266 11.6118 28.0332 12.1542 28.466 12.587C28.8987 13.0197 29.4412 13.3264 30.0351 13.474ZM30.0351 18.4214H39.1579C39.7582 18.2794 40.308 17.9752 40.7473 17.5421C41.1866 17.109 41.4986 16.5635 41.6491 15.9653H27.5789C27.7266 16.5592 28.0332 17.1016 28.466 17.5343C28.8987 17.9671 29.4412 18.2737 30.0351 18.4214ZM108.351 8.63192H117.474C118.068 8.48426 118.61 8.17759 119.043 7.74486C119.475 7.31212 119.782 6.76968 119.93 6.17578L105.895 6.17578C106.042 6.76968 106.349 7.31212 106.782 7.74486C107.215 8.17759 107.757 8.48426 108.351 8.63192Z"
                        fill="#393C41" />
                </g>
                <defs>
                    <clipPath id="clip0_1205_172">
                        <rect width="120" height="24" fill="white" transform="translate(0.105225 0.316406)" />
                    </clipPath>
                </defs>
            </svg>
        </a>
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