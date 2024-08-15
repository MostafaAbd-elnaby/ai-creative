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

<body style="direction: {{ session()->get('locale') == 'ar' ? 'rtl' : 'ltr' }}">

    @include('Layouts.nav')

    @yield('content')


    @include('Layouts.footer')
    <!-- Vendor JS Files -->
    <script src={{asset("assets/vendor/purecounter/purecounter_vanilla.js")}}></script>
    <script src={{asset("assets/vendor/aos/aos.js")}}></script>
    <script src={{asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>
    <script src={{asset("assets/vendor/glightbox/js/glightbox.min.js")}}></script>
    <script src={{asset("assets/vendor/isotope-layout/isotope.pkgd.min.js")}}></script>
    <script src={{asset("assets/vendor/swiper/swiper-bundle.min.js")}}></script>
    <script src={{asset("assets/vendor/waypoints/noframework.waypoints.js")}}></script>
    <script src={{asset("assets/vendor/php-email-form/validate.js")}}></script>

    <!-- Template Main JS File -->
    <script src={{asset("assets/js/main.js")}}></script>
    <!-- Change Language Script -->
    <script type="text/javascript">

        let url = "{{ route('changeLang') }}";

        $(".changeLang").change(function(){
            window.location.href = url + "?lang="+ $(this).val();
        });

    </script>
</body>


</html>
