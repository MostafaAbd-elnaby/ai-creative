<!DOCTYPE html>
<html lang="{{ session()->get('locale') }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Creative Agency</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href={{ asset('assets/img/favicon.png') }} rel="icon">
    <link href={{ asset('assets/img/apple-touch-icon.png') }} rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alexandria&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href={{ asset('assets/vendor/animate.css/animate.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/aos/aos.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/boxicons/css/boxicons.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/glightbox/css/glightbox.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/swiper/swiper-bundle.min.css') }} rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href={{ asset('assets/css/style.css') }} rel="stylesheet">
    <link href={{ asset('assets/css/responsive.css') }} rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body style="direction: {{ session()->get('locale') == 'ar' ? 'rtl' : 'ltr' }}">

    @include('Layouts.nav')

    @yield('content')


    @include('Layouts.footer')
    <!-- Vendor JS Files -->
    <script src={{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}></script>
    <script src={{ asset('assets/vendor/aos/aos.js') }}></script>
    <script src={{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}></script>
    <script src={{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}></script>
    <script src={{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}></script>
    <script src={{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}></script>
    <script src={{ asset('assets/vendor/php-email-form/validate.js') }}></script>

    <!-- Template Main JS File -->
    <script src={{ asset('assets/js/main.js') }}></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('ul li a');
            // Handle click events
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    // Remove active class from all links
                    navLinks.forEach(l => l.classList.remove('active'));
                    // Add active class to clicked link
                    this.classList.add('active');
                    // Navigate to the new URL
                    window.location.href = this.getAttribute('href');
                });
            });

            // Set active class based on current URL
            const currentUrl = window.location.href;
            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentUrl.split('#')[0]) {
                    link.classList.add('active');
                }
            });
        });
    </script>
    <script>
        // Handle Scroll and Navigation
        $(document).ready(function() {
            // Handle all navigation clicks (including Home)
            $('.nav-link').on('click', function(e) {
                e.preventDefault();

                // Remove active class from all links
                $('.nav-link').removeClass('active');

                // Add active class to clicked link
                $(this).addClass('active');

                const target = $(this).attr('href');

                if (target === '{{ url('/') }}') {
                    // Scroll to top for Home link
                    $('html, body').animate({
                        scrollTop: 0
                    }, 800);
                    history.replaceState(null, null, '{{ url('/') }}');
                } else if (target.startsWith('#')) {
                    // Smooth scroll for section links
                    const targetSection = $(target);
                    if (targetSection.length) {
                        $('html, body').animate({
                            scrollTop: targetSection.offset().top
                        }, 800);
                        history.replaceState(null, null, ' ');
                    }
                } else {
                    // Handle normal links
                    window.location.href = target;
                }
            });

            // Update active class on scroll
            $(window).on('scroll', function() {
                const scrollPosition = $(window).scrollTop();

                // Check if at top of page
                if (scrollPosition < 100) {
                    $('.nav-link').removeClass('active');
                    $('.nav-link[href="{{ url('/') }}"]').addClass('active');
                    return;
                }

                // Check sections
                $('section').each(function() {
                    const sectionTop = $(this).offset().top;
                    const sectionBottom = sectionTop + $(this).outerHeight();

                    if (scrollPosition >= sectionTop - 100 && scrollPosition < sectionBottom -
                        100) {
                        const sectionId = '#' + $(this).attr('id');
                        $('.nav-link').removeClass('active');
                        $(`.nav-link[href="${sectionId}"]`).addClass('active');
                    }
                });
            });
        });
    </script>
    <script>
        document.addEventListener('click', function(e) {
            if (e.target.matches('.toggle-navbar-mobile .nav-link')) {
                const navbar = document.querySelector('#navbar');
                const toggleBtn = document.querySelector('.mobile-nav-toggle');
                if (navbar.classList.contains('navbar-mobile')) {
                    navbar.classList.remove('navbar-mobile');
                    toggleBtn.classList.remove('bi-x');
                    toggleBtn.classList.add('bi-list');
                }
            }
        });
    </script>
</body>


</html>
