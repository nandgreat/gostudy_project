@extends('users.master')

@section('title', 'Dashboard')

@section('content_header')
<h1>Users</h1>
@stop

@section('content')

<div class="row" style="background-color: #0E3051;">
    <div class="container">

        <div class="row">
            <div class="col-md-6" style="margin-top: 40px; flex-direction: column; display:flex; justify-content: center; align-items: flex-start;">
                <div>
                    <iframe width="620" height="315" style="margin-right: 20px;" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
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

<hr style="color: red; border-color: #E5104D; border-width:2px;" />

<section style="padding-top: 80px;padding-bottom:80px;">
    <div class="container">

        <div class="row">

            <div class="col-md-8 offset-2" style=" display:flex;justify-content: center;flex-direction:column">
                <img height="auto" width="100%" alt="" style="width: 100%; margin:0px;" src="{{ asset('frontend/assets/img') }}/sponsors_image.png" />

            </div>
        </div>
</section>

<hr style="color: red; border-color: #E5104D; border-width:2px;" />

<section style="padding-top: 80px;padding-bottom:80px;">
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
</section>

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

<script src="{{ asset('js/main.js') }}" defer></script>

@stop