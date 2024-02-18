@extends('users.master')

@section('title', 'Dashboard')

@section('content_header')
<h1>Users</h1>
@stop

@section('content')

<div class="row">
    <div class="container">

        <h2 class="center"><b>Trip Details</b></h2>
        <div class="row">

            <div class="col-md-6">
                <div class="table mt-5">
                    @if($details->count()>0)

                    <h3 class="">{{$details->from}} - {{$details->to}}</h3>

                    <div class="row" style="justify-content: space-between; margin-top:30px">
                        <p>Travel Type</p>
                        <p>{{$details->bus->bus_type}}</pack>
                    </div>

                    <div class="row" style="justify-content: space-between;">
                        <p>Bus No</p>
                        <p>{{$details->bus->coach_number}}</pack>
                    </div>

                    <div class="row" style="justify-content: space-between;">
                        <p>No of Passengers</p>
                        <p>{{$passengers}}</pack>
                    </div>

                    <div class="row" style="justify-content: space-between;">
                        <p>Departure Date</p>
                        <p>{{$details->departure_date}} {{$details->departure_time}}</pack>
                    </div>

                    <div class="row" style="justify-content: space-between;">
                        <p>Trip Amount</p>
                        <p>{{number_format($details->price * $passengers)}}</pack>
                    </div>

                    <div class="row" style="justify-content: space-between;">
                        <p>Seats Available</p>
                        <p>{{$details->seats_available}}</pack>
                    </div>

                    <div class="row" style="justify-content: space-between; margin-top: 30px">
                        <a class="btn btn-primary" style="padding:10px" href="{{route('booking.installmentalpayment',['trip_id'=>$details->id, 'passengers' => $passengers])}}">Installmental Payment</a>
                        <a class="btn btn-success" style="padding:10px" href="{{route('booking.payment',['trip_id'=>$details->id, 'passengers' => $passengers, 'amount'=>$details->price])}}">Payment Now</a>
                    </div>
                    @else
                    <p>No trip found</p>

                    @endif

                </div>
            </div>
            <div class="col-md-6">
                <div class="right-image"></div>
            </div>

        </div>


    </div>

</div>


@endsection

@section('myjsfile')
<!-- Styles -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}" defer></script>

<script src="{{ asset('js/main.js') }}" defer></script>

@stop
<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    .header {
        overflow: hidden;
        background-color: #f1f1f1;
        padding: 20px 10px;
    }

    .header a {
        float: left;
        color: black;
        text-align: center;
        padding: 2px;
        text-decoration: none;
        font-size: 18px;
        line-height: 25px;
        border-radius: 4px;
    }

    .header a.logo {
        font-size: 25px;
        font-weight: bold;
    }

    .header a:hover {
        background-color: #ddd;
        color: black;
    }

    .header a.active {
        background-color: dodgerblue;
        color: white;
    }

    .header-right {
        float: right;
    }

    @media screen and (max-width: 500px) {
        .header a {
            float: none;
            display: block;
            text-align: left;
        }

        .header-right {
            float: none;
        }
    }

    .card {
        margin: auto;
        border: solid 1px #dbdad7;
        width: 40%;
        padding-left: 10px !important;
        padding-bottom: 10px !important;
        padding-right: 10px !important;
        padding-top: 0px !important
    }

    .card-title {
        margin: auto;
        padding: 15px;
        background-color: #2f7fad;
        color: white;
        width: 80%
    }

    div.card-body {
        padding: 0px
    }

    .custom-select {
        width: 100%
    }

    .btn2 {
        margin-left: 10%
    }

    input {
        outline: 0 !important;
        border-width: 0 0 2px !important;
        border-color: #d1d1cf !important
    }

    input:focus {
        border-color: #d1d1cf !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important
    }

    select {
        outline: 0 !important;
        border-width: 0 0 2px !important;
        border-color: #d1d1cf !important
    }

    select:focus {
        border-color: #d1d1cf !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important
    }

    .radiobtn {
        margin-left: 3.5%
    }

    .icons {
        margin: auto !important
    }

    .fa {
        border-radius: 25px;
        width: 10%;
        margin-left: 5%;
        border: solid 2px #dbdad7;
        margin-top: 5%;
        text-align: center
    }

    .fa-plane {
        color: #1cad9f
    }

    .fa-taxi {
        color: #c2f700
    }

    .fa-train {
        color: red
    }

    @media only screen and (max-width: 600px) {
        .card {
            margin: auto;
            border: solid 1px #dbdad7;
            width: 90%;
            padding-left: 10px !important;
            padding-bottom: 10px !important;
            padding-right: 10px !important;
            padding-top: 0px !important
        }

        .fa {
            border-radius: 25px;
            width: 15%;
            margin-left: 5%;
            border: solid 2px #dbdad7;
            margin-top: 5%;
            text-align: center
        }
    }
</style>