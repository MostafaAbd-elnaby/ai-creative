
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
             <a href="{{url('/')}}"><img src={{asset("assets/img/logo.png")}} alt="" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="active" href="{{url('/')}}">{{__("Home")}}</a></li>
                <li><a href="#services">{{__("Services")}}</a></li>
                <li><a href="#about">{{__("About Us")}}</a></li>
                <li><a href="#features">{{__("Features")}}</a></li>
                {{-- <li><a href="{{route('page.portfolio')}}">{{__("Portfolio")}}</a></li> --}}
                <li><a href="#contact">{{__("Contact Us")}}</a></li>
            </ul>
                <div class="col-md-auto" style="padding: 10px 0 10px 30px;">
                    <select class="changeLang changeBtn">
                        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                        <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>العربية</option>
                    </select>
                </div>
            <i class="bi bi-list mobile-nav-toggle"></i>

        </nav>
    </div>
</header>
