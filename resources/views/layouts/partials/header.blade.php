<header class="header-fourth wow fadeInDown">

    <nav class="header-fullpage navbar navbar-expand-lg">
        <div class="container">
            <div class="d-flex align-items-center">
                <a class="navbar-brand rounded-bottom light-bg" href="{{ url('/') }}">
                    <img src="{{ asset('assets/images/2.png') }}" height="85px" alt="logo">
                </a>
            </div>

            <div class="d-inline-flex request-btn order-lg-last">
                {{-- <a class="btn-theme icon-left bg-navy-blue no-shadow align-self-center" href="#" role="button"
                    data-bs-toggle="modal" data-bs-target="#request_popup"><i class="icofont-user"></i><span
                        class="d-none d-sm-inline-block">Login</span></a> --}}

                <button class="navbar-toggler x collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="{{ (request()->segment(1) == 'about-us') ? 'active nav-item' : 'nav-item' }}">
                        <a class="nav-link" href="{{ url('/about-us') }}">About Us</a>
                    </li>
                    <li class="{{ (request()->segment(1) == 'services') ? 'active nav-item' : 'nav-item' }}">
                        <a class="nav-link" href="{{ url('/services') }}">Services</a>
                    </li>
                    {{-- <li class="{{ (request()->segment(1) == 'products') ? 'active nav-item' : 'nav-item' }}">
                        <a class="nav-link" href="{{ url('/products') }}">Products</a>
                    </li> --}}
                    {{-- <li class="{{ (request()->segment(1) == 'media') ? 'active nav-item' : 'nav-item' }}">
                        <a class="nav-link" href="{{ url('/media') }}">Media</a>
                    </li> --}}
                    <li class="{{ (request()->segment(1) == 'contact-us') ? 'active nav-item' : 'nav-item' }}">
                        <a class="nav-link" href="{{ url('/contact-us') }}">Contact Us</a>
                    </li>
                    {{-- <li class="{{ (request()->segment(1) == 'faqs') ? 'active nav-item' : 'nav-item' }}">
                        <a class="nav-link" href="{{ url('/faqs') }}">FAQS</a>
                    </li> --}}
                </ul>

            </div>
        </div>
    </nav>

</header>
