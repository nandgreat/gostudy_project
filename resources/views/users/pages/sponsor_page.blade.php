@extends('users.master')

@section('title', 'Dashboard')

@section('content_header')
<h1>Users</h1>
@stop

@section('content')

<hr style="color: red; border-color: #E5104D; border-width:2px;" />

<section style="padding-top: 80px;padding-bottom:80px;">
    <div class="container">

        <div class="row">
            <div class="col-md-8 offset-2">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <iframe width="720" height="350" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
                        </div>
                        <div class="carousel-item">
                            <iframe width="720" height="350" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
                        </div>
                        <div class="carousel-item">
                            <iframe width="720" height="350" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
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
                    <h2 class="" style="font-weight:bold; margin-left:0px; text-align: center; color:#0E3051">BECOME A SPONSOR, MAKE AN IMPACT</h2>
                </div>
            </div>
        </div>


        <div class="row" style="margin-top: 30px;">

            <div class="col-md-6 offset-3 contact-us" style="margin-top: 40px;padding-left:40px; display:flex;justify-content: center;flex-direction:column">
                <h2 style="text-align: center; margin-bottom: 30px">Select Donation Type</h2>

                <a href="{{route('cash-donation')}}">
                    <div class="sponsor-btn">
                        <h3>Cash</h3>
                    </div>
                </a>

                <a href="{{route('non-cash-donation')}}">
                    <div class="sponsor-btn" style="margin-top: 30px;">
                        <h3>Non Cash</h3>
                    </div>
                </a>

            </div>
        </div>
    </div>
</section>


<hr style="color: red; border-color: #E5104D; border-width:2px;" />

<section style="padding-top: 80px;padding-bottom:80px;">
    <div class="container">

        <h2 class="card-title" style="font-weight:bold;color:#E5104D; text-align: center;">IMPACT STORIES </h2>


        <div class="row" style="background-color: #D9D9D9; padding: 60px">

            <p style="font-size: 20px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in suscipit odio. Morbi fringilla placerat purus eget sollicitudin. Morbi ornare scelerisque posuere. Nam sodales odio posuere elementum fermentum. Integer lobortis purus et eros tincidunt, eget ultricies arcu luctus. Vivamus et placerat dolor, nec</p>

        </div>
    </div>
</section>

<section style="padding-top: 80px;padding-bottom:80px;">
    <div class="container">

        <h2 class="card-title" style="font-weight:bold;color:#E5104D; text-align: center;">SPONSORS </h2>

        <div class="col-md-8 offset-2" style=" display:flex;justify-content: center;flex-direction:column">
            <img height="auto" width="100%" alt="" style="width: 100%; margin:0px;" src="{{ asset('frontend/assets/img') }}/sponsors_small.png" />

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