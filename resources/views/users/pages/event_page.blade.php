@extends('users.master')

@section('title', 'Dashboard')

@section('content_header')
<h1>Users</h1>
@stop

@section('content')

<hr style="color: red; border-color: #E5104D; border-width:2px;" />

<section style="padding-top: 80px;padding-bottom:80px;">
    <div class="container">


        <div class="row" style="display: flex;">
            <div class="d-flex" style="flex:1">
                <h2 style="font-weight:bold;font-size:larger;color:#E5104D;"><b>UPCOMING EVENT</b></h2>
            </div>
            <div class="d-flex" style="flex:1; display:flex; flex-direction:row;justify-content: flex-end;">
                <h2 style="font-weight:bold; font-size:larger; color:#0E3051; "><b>JOIN HANDS WITH US TO IMAPCT LIVES</b></h2>
            </div>
        </div>
    </div>
</section>


<section style="padding-top: 80px;padding-bottom:80px;">
    <div class="container">

        <div class="row">
            <div class="col-md-6">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('frontend/assets/img') }}/event_1.png" height="350" class="d-block w-100" alt="Slide 1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="padding-left:40px; display:flex;justify-content: space-between;flex-direction:column;">
                <div style="margin-top: 10px; display:flex;justify-content: center;flex-direction:column">
                    <h2 class="card-title" style="font-weight:bold;color:#0E3051">John Doe Event 1 </h2>
                    <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley nic typesetting, including versions of Lorem Ipsum.</p>
                </div>

                <button type="submit" style="padding-top:15px; padding-bottom:15px;" class="btn btn-block btn-primary mt-sm-3 fadeIn fouth">CLICK TO BUY TICKECT</button>

            </div>

        </div>
    </div>
</section>

<section style="padding-top: 80px;padding-bottom:80px;">
    <div class="container">

        <div class="row">
            <div class="col-md-6">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('frontend/assets/img') }}/event_2.png" height="350" class="d-block w-100" alt="Slide 1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="padding-left:40px; display:flex;justify-content: space-between;flex-direction:column;">
                <div style="margin-top: 10px; display:flex;justify-content: center;flex-direction:column">
                    <h2 class="card-title" style="font-weight:bold;color:#0E3051">John Doe Event 2 </h2>
                    <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley nic typesetting, including versions of Lorem Ipsum.</p>
                </div>

                <button type="submit" style="padding-top:15px; padding-bottom:15px;" class="btn btn-block btn-primary mt-sm-3 fadeIn fouth">CLICK TO BUY TICKECT</button>

            </div>

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