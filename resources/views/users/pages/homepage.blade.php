@extends('users.master')

@section('title', 'Dashboard')

@section('content_header')
<h1>Users</h1>
@stop


<style type="text/css">
    @media (max-width:991.98px) {
        .padding {
            padding: 1.5rem
        }
    }

    @media (max-width:767.98px) {
        .padding {
            padding: 1rem
        }
    }

    .padding {
        padding: 5rem
    }

    .card {
        position: relative;
        display: flex;
        width: 350px;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid #d2d2dc;
        border-radius: 11px;
        -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
        -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
        box-shadow: 0px 0px 5px 0px rgb(161, 163, 164);
    }

    .card .card-body {
        padding: 1rem 1rem;
    }

    .card-body {
        flex: 1 1 auto;
        padding: 1.25rem
    }

    p {
        font-size: 0.875rem;
        margin-bottom: .5rem;
        line-height: 1.5rem
    }

    h4 {
        line-height: .2 !important;
    }

    .profile {
        margin-top: 16px;
        margin-left: 11px;
    }

    .profile-pic {
        width: 58px;
    }

    .cust-name {
        font-size: 18px;
    }

    .cust-profession {
        font-size: 10px;
    }



    .items {
        width: 90%;
        margin: 0px auto;
        margin-top: 100px
    }

    .slick-slide {
        margin: 10px
    }
</style>

@section('content')

<div class="row" style="background-color: #0E3051;">
    <div class="container">

        <div class="row">
            <div class="col-md-6" style="margin-top: 40px; flex-direction: column; display:flex; justify-content: center; align-items: flex-start;">
                <div>
                    <iframe width="620" height="315" style="margin-right: 20px;" src="https://www.youtube.com/watch?v=dTnyIYnl19U&t=2322s"></iframe>
                </div>
                <div style="margin-top: 50px;">
                    <h2 style="color:white;font-weight:900;font-size:65px">GO STUDY<br>CHARITY</h2>
                </div>
            </div>
            <div class="col-md-6" style="justify-content: center;">
                <div class="right-image"></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="container" style="padding-top: 80px;padding-bottom:80px">

        <div class="row">
            <div class="col-md-12" style="margin-top: 40px;">
                <h2 class="card-title" style="color: #E5104D;font-weight:bold;">About </h2>
                <p class="" style="line-height: 30px;font-size:20px;margin-top:30px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
    </div>
</div>

<hr style="color: red; border-color: #E5104D; border-width:2px;" />

<section style="padding-top: 80px;padding-bottom:80px;">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <h2 class="card-title" style="font-weight:bold;color:#E5104D">Our Team </h2>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('frontend/assets/img') }}/team_member.png" height="350" class="d-block w-100" alt="Slide 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('frontend/assets/img') }}/team_member.png" height="350" class="d-block w-100" alt="Slide 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('frontend/assets/img') }}/team_member.png" height="350" class="d-block w-100" alt="Slide 3">
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
            <div class="col-md-6" style="margin-top: 40px;padding-left:40px; display:flex;justify-content: center;flex-direction:column">
                <h2 class="card-title" style="font-weight:bold;color:#E5104D">John Doe </h2>
                <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley nic typesetting, including versions of Lorem Ipsum.</p>
            </div>

        </div>
    </div>
</section>

<section style="padding-top: 80px;padding-bottom:80px;">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <h2 class="card-title" style="font-weight:bold;color:#E5104D">Our Impact </h2>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('frontend/assets/img') }}/our_impact.png" height="350" class="d-block w-100" alt="Slide 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('frontend/assets/img') }}/our_impact.png" height="350" class="d-block w-100" alt="Slide 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('frontend/assets/img') }}/our_impact.png" height="350" class="d-block w-100" alt="Slide 3">
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
            <div class="col-md-6" style="margin-top: 40px;padding-left:40px; display:flex;justify-content: center;flex-direction:column">
                <h2 class="card-title" style="font-weight:bold;color:#E5104D">John Doe </h2>
                <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley nic typesetting, including versions of Lorem Ipsum.</p>
            </div>

        </div>
    </div>
</section>

<section style="padding-top: 80px;padding-bottom:80px;">

</section>

<hr style="color: red; border-color: #E5104D; border-width:2px;" />

<section style="padding-top: 80px;padding-bottom:80px;">

    <div class="row">
        <div class="container">
            <div class="col-md-8 offset-2" style=" display:flex;justify-content: center;flex-direction:column">
                <img height="auto" width="100%" alt="" style="width: 100%; margin:0px;" src="{{ asset('frontend/assets/img') }}/sponsors_image.png" />

            </div>
        </div>
    </div>


    <div class="items">

        <div class="card" style="height: 200px;">
            <img src="{{ asset('frontend/assets/img') }}/logo_one.jpeg" width="100%" height="100%">
        </div>

        <div class="card" style="height: 200px;">
            <img src="{{ asset('frontend/assets/img') }}/logo_two.png" width="100%" height="100%">
        </div>

        <div class="card" style="height: 200px;">
            <img src="{{ asset('frontend/assets/img') }}/logo_three.jpeg" width="100%" height="100%">
        </div>

        <div class="card" style="height: 200px;">
            <img src="{{ asset('frontend/assets/img') }}/logo_one.jpeg" width="100%" height="100%">
        </div>

        <div class="card" style="height: 200px;">
            <img src="{{ asset('frontend/assets/img') }}/logo_two.png" width="100%" height="100%">
        </div>


    </div>
</section>

<hr style="color: red; border-color: #E5104D; border-width:2px;" />

<!-- <section style="padding-top: 80px;padding-bottom:80px;">
    <div class="container">

        <div class="row">

            <div class="col-md-6" style="margin-top: 40px;padding-left:40px; display:flex;justify-content: center;flex-direction:column">
                <img height="auto" width="100%" alt="" style="width: 100%; margin:0px;" src="{{ asset('frontend/assets/img') }}/contact_us.png" />
            </div>

            <div class="col-md-6 contact-us" style="margin-top: 40px;padding-left:40px; display:flex;justify-content: center;flex-direction:column">
                <input type="text" id="email" autocomplete="off" class="fadeIn" style="width: 100%;" name="email" placeholder="Enter  Name">
                <input type="phone" id="email" autocomplete="off" class="fadeIn" style="width: 100%;" name="email" placeholder="Enter Phone number">
                <input type="email" id="email" autocomplete="off" class="fadeIn" style="width: 100%;" name="email" placeholder="Enter Email Address">

                <button type="submit" style="padding-top:15px; padding-bottom:15px;" class="btn btn-block btn-primary mt-sm-3 fadeIn fouth">Submit</button>

            </div>

        </div>
</section> -->

<section style="padding-top: 80px;padding-bottom:80px;">
    <div class="container">

        <div class="row">

            <div class="col-md-6" style="margin-top: 40px;padding-left:40px; display:flex;justify-content: center;flex-direction:column">
                <h2 class="card-title" style="font-weight:bold;color:#E5104D">Call Us</h2>
                <p class="">MONDAY - FRIDAY, 9AM - 5PM</p>
                <h2 class="card-title" style="font-weight:bold;color:#0E3051">+234 810 000 0000</h2>

                <h2 class="card-title" style="font-weight:bold;color:#E5104D; margin-top:30px">Visit Us</h2>
                <p class="">228, Abayomi Street, Ikeja, Lagos,<br>Nigeria.</p>
                <h2 class="card-title" style="font-weight:bold;color:#0E3051">+234 810 000 0000</h2>
            </div>


        </div>
</section>
<hr style="color: red; border-color: #E5104D; border-width:2px;" />

@include('users.fixed.footer')

@endsection


@section('myjsfile')
<!-- Styles -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}" defer></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="{{ asset('js/main.js') }}" defer></script>


<script>
    $(document).ready(function() {

        $('.items').slick({
            dots: true,
            infinite: true,
            speed: 800,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }

            ]
        });
    });
</script>

@stop