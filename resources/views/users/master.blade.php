<!DOCTYPE html>
<html lang="en">

<script src='//fw-cdn.com/9640414/3411994.js' chat='true'>
</script>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title></title>
    <link rel="icon" type="image/x-icon" href="{{asset('frontend')}}/assets/img/favicon.ico" />
    
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('frontend')}}/css/styles.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />


</head>



<body id="page-top">

    <style>
        .navbar-brand {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .carousel-indicators {
            bottom: -50px;
            /* Adjust this value as needed */
        }

        .carousel-indicators .active {
            background-color: blue;
            /* Change the active indicator color */
        }

        .carousel-indicators li {
            background-color: red;
            /* Change the inactive indicator color */
        }

        .contact-us {}

        .contact-us input {
            color: red;
            border-bottom: 2px solid red;
            background-color: transparent;
        }

        .contact-us input:focus {
            color: red;
            border-bottom: 4px solid red;
            background-color: transparent;
        }

        .contact-us input::placeholder {
            color: #dd4570;
        }

        .sponsor-btn {
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 70px;
            align-items: center;
            color: white;
            background-color: #0E3051;
            border-radius: 10px
        }
    </style>

    <!-- Masthead-->
    @include('users.fixed.navbar')
    @yield('content')


    <!-- Footer-->
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{asset('frontend')}}/js/scripts.js"></script>
    @yield('myjsfile')

</body>

</html>