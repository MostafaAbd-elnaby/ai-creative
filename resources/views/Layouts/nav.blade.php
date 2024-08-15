
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

        <div class="logo">
{{--            <h1 class="text-light"><a href="index.html"><span>Moderna</span></a></h1>--}}
            <!-- Uncomment below if you prefer to use an image logo -->
             <a href="index.html"><img src={{asset("assets/img/logo.png")}} alt="" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="active" href="{{url('/')}}">{{__("Home")}}</a></li>
                <li><a href="#services">{{__("Services")}}</a></li>
                <li><a href="#about">{{__("About Us")}}</a></li>
                <li><a href="#features">{{__("Features")}}</a></li>
                <li><a href="{{route('page.portfolio')}}">{{__("Portfolio")}}</a></li>
{{--                <li><a href="team.html">Team</a></li>--}}
{{--                <li><a href="blog.html">Blog</a></li>--}}
{{--                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">Drop Down 1</a></li>--}}
{{--                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">Deep Drop Down 1</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 2</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 3</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 4</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 5</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li><a href="#">Drop Down 2</a></li>--}}
{{--                        <li><a href="#">Drop Down 3</a></li>--}}
{{--                        <li><a href="#">Drop Down 4</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                <li><a href="#contact">{{__("Contact Us")}}</a></li>
            </ul>
                <div class="col-md-auto" style="padding: 10px 0 10px 30px;">
                    <select class="changeLang changeBtn">
                        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                        <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>العربية</option>
                    </select>
                </div>
            <i class="bi bi-list mobile-nav-toggle"></i>

        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
