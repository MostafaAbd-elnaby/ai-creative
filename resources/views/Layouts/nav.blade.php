
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
             <a href="{{url('/')}}"><img src={{asset("assets/img/logo.png")}} alt="" class="img-fluid"></a>
        </div>
        <nav id="navbar" class="navbar">
            <ul>
                <li class="toggle-navbar-mobile"><a class="nav-link active" {{ Request::is('/') ? 'active' : '' }} href="{{url('/')}}">{{__("Home")}}</a></li>
                <li class="toggle-navbar-mobile"><a class="nav-link" href="#services">{{__("Services")}}</a></li>
                <li class="toggle-navbar-mobile"><a class="nav-link" href="#about">{{__("About Us")}}</a></li>
                <li class="toggle-navbar-mobile"><a class="nav-link" href="#features">{{__("Features")}}</a></li>
                {{-- <li><a href="{{route('page.portfolio')}}">{{__("Portfolio")}}</a></li> --}}
                <li class="toggle-navbar-mobile"><a class="nav-link" href="#contact">{{__("Contact Us")}}</a></li>
            </ul>
            <div class="col-md-auto" style="padding: 10px 0 10px 30px;">
                <form action="{{route('changeLang')}}" method="POST">
                    @csrf
                    <select class="changeLang changeBtn" name="locale" onchange="this.form.submit()">
                        <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
                        <option value="ar" {{ app()->getLocale() == 'ar' ? 'selected' : '' }}>العربية</option>
                    </select>
                </form>
            </div>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
