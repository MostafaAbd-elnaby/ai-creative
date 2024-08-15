@extends('app')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">{{__("We stop bothering you with")}}   <span>{{__("ideas")}}</span></h2>
                    <p class="animate__animated animate__fadeInUp">{{__("Your one-stop-shop for all your design and marketing needs. Our team of skilled professionals specialize in graphic design, web design, digital marketing and advertising photography to help you achieve your business goals.")}}</p>
                    <a href="#services" class="btn-get-started animate__animated animate__fadeInUp">{{__("Read More")}}</a>
                </div>
            </div>

{{--            <!-- Slide 2 -->--}}
{{--            <div class="carousel-item">--}}
{{--                <div class="carousel-container">--}}
{{--                    <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>--}}
{{--                    <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>--}}
{{--                    <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Slide 3 -->--}}
{{--            <div class="carousel-item">--}}
{{--                <div class="carousel-container">--}}
{{--                    <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>--}}
{{--                    <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>--}}
{{--                    <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">--}}
{{--                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>--}}
{{--            </a>--}}

{{--            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">--}}
{{--                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>--}}
{{--            </a>--}}

        </div>
    </section><!-- End Hero -->

    <main id="main">

    <!-- ======= Why Us Section ======= -->
{{--    <section class="why-us section-bg" id="video" data-aos="fade-up" date-aos-delay="200">--}}
{{--        <div class="container">--}}

{{--            <div class="row">--}}
{{--                <div class="col-lg-6 video-box">--}}
{{--                    <img src="assets/img/why-us.jpg" class="img-fluid" alt="">--}}
{{--                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>--}}
{{--                </div>--}}

{{--                <div class="col-lg-6 d-flex flex-column justify-content-center p-5">--}}

{{--                    <div class="icon-box">--}}
{{--                        <div class="icon"><i class="bx bx-fingerprint"></i></div>--}}
{{--                        <h4 class="title"><a href="">Lorem Ipsum</a></h4>--}}
{{--                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>--}}
{{--                    </div>--}}

{{--                    <div class="icon-box">--}}
{{--                        <div class="icon"><i class="bx bx-gift"></i></div>--}}
{{--                        <h4 class="title"><a href="">Nemo Enim</a></h4>--}}
{{--                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section><!-- End Why Us Section -->--}}

    <!-- ======= Services Section ======= -->
    <section class="services" id="services">
        <div class="container">

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="icon-box icon-box-pink">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4 class="title"><a href="">{{__("Marketing and Content Management")}}</a></h4>
                        <p class="description">{{__("service-1")}}</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box icon-box-cyan">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4 class="title"><a href="">{{__("Graphics Design")}}</a></h4>
                        <p class="description">{{__("service-2")}}</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box icon-box-green">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4 class="title"><a href="">{{__("Video Making")}}</a></h4>
                        <p class="description">{{__("service-3")}}</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box icon-box-blue">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4 class="title"><a href="">{{__("Build WebSites - ECommerces")}}</a></h4>
                        <p class="description">{{__("service-4")}}</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->


    <!-- ======= Service Details Section ======= -->
    <section class="service-details" id="about">
        <div class="container">
            <div class="section-title">
                <h2>{{__("About Us")}}</h2>
                <p>{{__("A specialized team of experts and professionals in the field of commercial identities design, media and account management. We seek to develop companies and projects.")}}</p>
            </div>

            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="card">
                        <div class="card-img">
                            <img src={{asset("assets/img/service-details-1.jpg")}} alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">{{__("Our Mission")}}</a></h5>
                            <p class="card-text">{{__("Helping you to make your project a success by making an identity and a distinctive and unique nature and increasing the spread of it enhancing your access to the largest possible base of the target customers")}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="card">
                        <div class="card-img">
                            <img src={{asset("assets/img/service-details-2.jpg")}} alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">{{__("Our Plan")}}</a></h5>
                            <p class="card-text">{{__("We have put strategies to work on the basis of which we are going on, until the design of a distinguished commercial identity that is impressed by everyone, in addition to paying attention to the high quality that meets the desires of customers")}}</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="card">
                        <div class="card-img">
                            <img src={{asset("assets/img/service-details-3.jpg")}} alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">{{__("Our Vision")}}</a></h5>
                            <p class="card-text">{{__("Helping project owners and companies go out to the light and realize the needs of the market, which creates a great opportunity for them to grow quickly")}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="card">
                        <div class="card-img">
                            <img src={{asset("assets/img/service-details-4.jpg")}} alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">{{__("Our Care")}}</a></h5>
                            <p class="card-text">{{__("We care about the smallest and smallest details to spread in the market through designs and content management with great care")}}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Service Details Section -->

    <!-- ======= Features Section ======= -->
    <section class="features" id="features">
        <div class="container">

            <div class="section-title">
                <h2>{{__("Features")}}</h2>
                <p class="lh-lg">{{__("Feature-Opening")}}</p>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-5">
                    <img src={{asset("assets/img/features-1.svg")}} class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-4">
                    <h3 class="mb-3" >{{__("Feature-1-head")}}</h3>
                    <p class="lh-lg">
                        {{__("Feature-1-body")}}
                    </p>
                </div>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-5 order-1 order-md-2">
                    <img src={{asset("assets/img/features-2.svg")}} class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5 order-2 order-md-1">
                    <h3 class="mb-3">{{__("Feature-2-head")}}</h3>
                    <p class="lh-lg">
                        {{__("Feature-2-body")}}
                    </p>
                </div>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-5">
                    <img src={{asset("assets/img/features-3.svg")}} class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5">
                    <h3 class="mb-3">{{__("Feature-3-head")}}</h3>
                    <p class="lh-lg">{{__("Feature-3-body")}}</p>
{{--                    <ul>--}}
{{--                        <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>--}}
{{--                        <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>--}}
{{--                        <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>--}}
{{--                    </ul>--}}
                </div>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-5 order-1 order-md-2">
                    <img src={{asset("assets/img/features-4.svg")}} class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5 order-2 order-md-1">
                    <h3 class="mb-3">{{__("Feature-4-head")}}</h3>
{{--                    <p class="lh-lg" class="fst-italic">--}}
{{--                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore--}}
{{--                        magna aliqua.--}}
{{--                    </p>--}}
                    <p class="lh-lg">
                        {{__("Feature-4-body")}}
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End Features Section -->

    @include('Layouts.contact')

    </main><!-- End #main -->

@endsection
