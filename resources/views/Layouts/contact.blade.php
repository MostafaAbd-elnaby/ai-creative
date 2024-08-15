<!-- ======= Contact Section ======= -->
<section class="contact" id="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="info-box">
{{--                            <i class="bx bx-user"></i>--}}
                            <h3>{{__("Our Social Media")}}</h3>
                            <div class="social-links mt-3">
                                <a href="https://twitter.com/ai_cr_agency?s=21&t=yA8uh34ZzOLQZA2CR4Czqw" class="twitter mx-lg-2"><i class="bx bxl-twitter"></i></a>
                                <a href="https://www.facebook.com/Ai.cr.agency?mibextid=LQQJ4d" class="facebook mx-lg-2"><i class="bx bxl-facebook"></i></a>
                                <a href="https://instagram.com/ai_cr_agency?igshid=YmMyMTA2M2Y=" class="instagram mx-lg-2"><i class="bx bxl-instagram"></i></a>
                                <a href="https://www.snapchat.com/add/ai.creative" class="linkedin mx-lg-2"><i class="bx bxl-snapchat"></i></a>
                            </div>

{{--                            <p>{{__("You Can Contact Us From Our Social Account, Or Send Us Message")}}</p>--}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bx bx-envelope"></i>
                            <h3>{{__("Email Us")}}</h3>
                            <p>info@aicreativesagency.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
{{--                            <i class="bx bx-phone-call"></i>--}}
                            <i class='bx bxl-whatsapp'></i>
                            <h3>{{__("Call Us")}}</h3>
                            <p><a target="_blank" href="https://wa.me/+966507208113?text=%D9%85%D8%B1%D8%AD%D8%A8%D8%A7%D9%8B%20!%20%D8%A3%D8%B1%D9%8A%D8%AF%20%D8%A7%D9%84%D8%A5%D8%B3%D8%AA%D9%81%D8%B3%D8%A7%D8%B1%20%D8%B9%D9%86%20%D8%A7%D9%84%D8%AE%D8%AF%D9%85%D8%A7%D8%AA">+966507208113</a></p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">
                <form action="{{route('sendMessage')}}" method="post"  class="php-email-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="{{__("Your Name")}}" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="{{__("Your Email")}}" required>
                        </div>
                    </div>
{{--                    <div class="form-group mt-3">--}}
{{--                        <input type="text" class="form-control" name="subject" id="subject" placeholder={{__("Subject")}} required>--}}
{{--                    </div>--}}
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="{{__("Message")}}" required></textarea>
                    </div>
{{--                    <div class="my-3">--}}
{{--                        <div class="loading">Loading</div>--}}
{{--                        <div class="error-message"></div>--}}
{{--                        <div class="sent-message">Your message has been sent. Thank you!</div>--}}
{{--                    </div>--}}

                    <div class="text-center"><button style="margin-top: 27px" type="submit">{{__("Send Message")}}</button></div>
                    @isset($success)
                        <div class="alert alert-success" role="alert">
                            {{ $success }}
                        </div>
                    @endisset
                    @isset($errors)
                        @if($errors->get('email'))
                            @foreach ($errors->get('email') as $message)
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @endforeach
                        @else
                            @foreach($errors as $error)
                                <div class="alert alert-danger" role="alert">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif
                    @endisset
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->
