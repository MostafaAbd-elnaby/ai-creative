<!DOCTYPE html>
<html lang="{{session()->get('locale')}}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Creative Agency</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href={{asset("assets/img/favicon.png")}} rel="icon">
    <link href={{asset("assets/img/apple-touch-icon.png")}} rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alexandria&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href={{asset("assets/vendor/animate.css/animate.min.css")}} rel="stylesheet">
    <link href={{asset("assets/vendor/aos/aos.css")}} rel="stylesheet">
    <link href={{asset("assets/vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
    <link href={{asset("assets/vendor/bootstrap-icons/bootstrap-icons.css")}} rel="stylesheet">
    <link href={{asset("assets/vendor/boxicons/css/boxicons.min.css")}} rel="stylesheet">
    <link href={{asset("assets/vendor/glightbox/css/glightbox.min.css")}} rel="stylesheet">
    <link href={{asset("assets/vendor/swiper/swiper-bundle.min.css")}} rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href={{asset("assets/css/style.css")}} rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="{{asset('assets/img/boma.png')}}"
                     class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                <form method="post" action="{{route('login')}}">
                    @csrf
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
                               placeholder="Enter a valid email address" />
                        <label class="form-label pt-2" for="form3Example3">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <input type="password" name="password" id="pass" class="form-control form-control-lg"
                               placeholder="Enter password" />
                        <label class="form-label pt-2" for="pass">Password</label>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

</body>
