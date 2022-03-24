<!-- STRAT NAVBAR -->
<div id="navbar">
    <nav class="navbar navbar-expand-lg navbar-white fixed-top navbar-custom sticky sticky-dark" id="main-menu">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo text-uppercase" href="{{url('/')}}">
                <img src="{{Theme::url('images/logo-dark.png')}}" alt="@setting('core::site-name')" height="24" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                @include('partials.navigation')
                <div class="nav-button">
                    <ul class="list-inline nav-social d-none d-lg-inline-block  mb-0">
                        <li class="list-inline-item ps-1"><a href="@setting('core::facebook')"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item ps-1"><a href="@setting('core::twitter')"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item ps-1"><a href="@setting('core::instagram')"><i class="mdi mdi-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- END NAVBAR -->
