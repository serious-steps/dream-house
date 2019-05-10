<!DOCTYPE html>
<head>
        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title> Realstate</title>
        <link rel="icon" href="{{ asset('for_theme/img/favicon.png') }}"type="image/png">
         <link rel="stylesheet" href="{{ asset('for_theme/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('for_theme/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('for_theme/vendors/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('for_theme/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('for_theme/vendors/animate-css/animate.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('for_theme/css/responsive.css') }}">


<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>    @include('layouts.home_header')
    <body>

     
<!--================Header Menu Area =================-->

<!--================Home Banner Area =================-->
    
            @yield('content')

    
<!--     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}" crossorigin="anonymous"></script> -->



<script src="{{ asset('for_theme/js/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('for_theme/js/popper.js') }}"></script>
<script src="{{ asset('for_theme/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('for_theme/js/stellar.js') }}"></script>
<script src="{{ asset('for_theme/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('for_theme/vendors/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('for_theme/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('for_theme/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('for_theme/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('for_theme/js/waypoints.min.js') }}"></script>
<script src="{{ asset('for_theme/js/mail-script.js') }}"></script>
<script src="{{ asset('for_theme/js/contact.js') }}"></script>
<script src="{{ asset('for_theme/js/jquery.form.js') }}"></script>
<script src="{{ asset('for_theme/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('for_theme/js/mail-script.js') }}"></script>
<script src="{{ asset('for_theme/js/theme.js') }}"></script>
    </body>
</html>
