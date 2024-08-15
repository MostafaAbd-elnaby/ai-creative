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
{{--    <link href={{asset("assets/vendor/animate.css/animate.min.css")}} rel="stylesheet">--}}
{{--    <link href={{asset("assets/vendor/aos/aos.css")}} rel="stylesheet">--}}
    <link href={{asset("assets/vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
{{--    <link href={{asset("assets/vendor/bootstrap-icons/bootstrap-icons.css")}} rel="stylesheet">--}}
{{--    <link href={{asset("assets/vendor/boxicons/css/boxicons.min.css")}} rel="stylesheet">--}}
{{--    <link href={{asset("assets/vendor/glightbox/css/glightbox.min.css")}} rel="stylesheet">--}}
{{--    <link href={{asset("assets/vendor/swiper/swiper-bundle.min.css")}} rel="stylesheet">--}}

    <!-- Template Main CSS File -->
    <link href={{asset("assets/css/style.css")}} rel="stylesheet">

{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}

</head>

<body>
<div class="container">
        <div class=" align-items-center">
            <nav id="navbar" class="navbar row">
                <div class="col-md-6">
                    <h3>Welcome, <b style="text-transform: capitalize">{{auth()->user()->name}}</b></h3>
                </div>
                <div class="col-md-6" style="padding: 10px 0 10px 30px;">
                    <a href="{{route('logout')}}"><button class="btn btn-outline-warning">LogOut</button></a>
                </div>
                <i class="bi bi-list mobile-nav-toggle"></i>

            </nav><!-- .navbar -->
        </div>

<table class="table">
    <thead style="color: #DDDDDD">
        <tr>
            <th>Name</th>
            <th>E-mail</th>
            <th>Message</th>
        </tr>
    </thead>
    <tbody>
    @if($messages)
        @foreach($messages as $message)
        <tr style="color: #DDDDDD">
            <td>{{$message->name}}</td>
            <td>{{$message->email}}</td>
            <td>{{$message->message}}</td>
        </tr>
        @endforeach
    @endif
    </tbody>
</table>
</div>
</body>
