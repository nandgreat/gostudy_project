@extends('users.master')

@section('title', 'Dashboard')

@section('content_header')
<h1>Users</h1>
@stop

@section('content')

<hr style="color: red; border-color: #E5104D; border-width:2px;" />

<form action="{{route('cash-donation-process')}}" method="post">
    @csrf
    <section style="padding-top: 80px;padding-bottom:80px;">
        <div class="container">

            <div class="row">
                <div class="col-md-8 offset-2">

                    <h2 class="" style="font-weight:bold; margin-left:0px; text-align: center; color:#0E3051">CASH DONATION</h2>

                    @if(session()->has('message'))
                    <p class="alert alert-success">{{session()->get('message')}}</p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-7 form-group">

                    <div class="row">
                        <div class="col-md-6 form-group " style="margin-top: 40px; display:flex;justify-content: center;flex-direction:column">
                            <label class="" for="email">Donation Frequency</label>
                            <select id="donateFrequency" class="form-control" style="background-color: #0E3051; color:white;" name="donateFrequency" onchange="showHideDiv()">
                                <option value="">::Select Frequency::</option>
                                <option value="0">One Time</option>
                                <option value="1">Recurring</option>
                            </select>
                        </div>

                        <div class="col-md-6 form-group" style="margin-top: 40px; display:flex;justify-content: center;flex-direction:column" id="frequencyDiv">
                            <label class="" for="email">How often would you like to donate?</label>
                            <select id="payment_intervals" class="form-control" style="background-color: #0E3051; color:white;" name="payment_intervals" onchange="showHideDiv()">
                                <option value="">::Select Frequency::</option>
                                <option value="daily">Daily</option>
                                <option value="weekly">Weekly</option>
                                <option value="monthly">Monthly</option>
                                <option value="monthly">Year</option>
                            </select>
                        </div>

                        <div class="col-md-6 form-group" style="margin-top: 40px; display:flex;justify-content: center;flex-direction:column">
                            <label class="" for="email">Select Currency</label>
                            <select id="currency" class="form-control" style="background-color: #0E3051; color:white;" name="currency">
                                <option value="">::Select Currency::</option>
                                <option value="usd">USD</option>
                            </select>
                        </div>

                        <div class="col-md-12 form-group" style="margin-top: 40px; display: flex; background-color:#0E3051; border-radius:10px; padding:20px; display:flex;justify-content: center;flex-direction:column">
                            <label class="mt-3" for="amount" style="color: white">Donation Amount</label>
                            <input type="amount" id="amount" autocomplete="off" class="fadeIn" name="amount" placeholder="Email Amount">
                            <div style="justify-content: space-evenly; margin-top:20px; display:flex; flex-direction: row;;">
                                <div style="background-color:#D9D9D9; padding:10px; color:#E5104D; border-radius: 5px" id="100d">
                                    $100
                                </div>
                                <div style="background-color:#D9D9D9; padding:10px; color: #E5104D; border-radius: 5px" id="200d">
                                    $200
                                </div>
                                <div style="background-color:#D9D9D9; padding:10px; color: #E5104D; border-radius: 5px" id="500d">
                                    $500
                                </div>
                                <div style="background-color:#D9D9D9; padding:10px; color: #E5104D; border-radius: 5px" id="1000d">
                                    $1000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5" style=" justify-content:center; align-items:center; flex-direction:column">


                    <div class="col form-group" style="margin-top: 40px; display:flex;justify-content: center;flex-direction:column" id="frequencyDiv">
                        <label class="" for="email">Payment Method</label>
                        <select id="payment_method" class="form-control" style="background-color: #0E3051; color:white;" name="payment_method" onchange="showHideDiv()">
                            <option value="">::Select Payment method::</option>
                            <option value="card">Card</option>
                        </select>
                    </div>
                    <div class="col-md-12" style="">
                        <label class="text-left" for="last_name">Cardholders Name</label>
                        <div class="row">
                            <input type="text" id="first_name" style="flex: 1" placeholder="Enter Cardholders Name" name='card_name' autofocus="">
                        </div>
                        <label class="mt-3 text-left" for="last_name">Enter Card Number</label>
                        <div class="row">
                            <input type="text" id="first_name" style="flex: 1;margin-top:0" placeholder="Enter Card Number" name='card_name' autofocus="">
                        </div>
                    </div>
                    <div class="col-md-12" style="flex-direction: row; display:flex;">

                        <div class="" style="margin: 0;">
                            <label class="mt-3 text-left" for="last_name">Exp Date</label>

                            <input type="text" id="first_name" style="flex: 1;" placeholder="Exp Date" name='card_name' autofocus="">
                        </div>
                        <div>
                            <label class="mt-3 text-left" for="last_name">CVV</label>

                            <input type="text" id="first_name" style="flex: 1;" placeholder="Enter CVV" name='card_name' autofocus="">
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section style="padding-top: 80px;padding-bottom:80px;">
        <div class="container">
            <h4 class="card-title" style="font-weight:bold;color:#E5104D; text-align: left;">NARRATION </h4>

            <textarea rows="4" class="row form-control" style="background-color: #D9D9D9; padding:20px">

        </textarea>
        </div>
    </section>


    <section style="padding-top: 80px;padding-bottom:80px;">
        <div class="container">

            <div class="row" style="flex-direction: row; justify-content: space-between;">

                <button type="button" style="padding-top:10px; padding-bottom:10px;" class="btn btn-primary mt-sm-3 fadeIn fouth">Save</button>
                <button type="submit" style="padding-top:10px; padding-bottom:10px;" class="btn btn-primary mt-sm-3 fadeIn fouth">Submit</button>


            </div>
    </section>
</form>



@endsection

@section('myjsfile')
<!-- Styles -->
<!-- <script src="{{ asset('vendor/jquery/jquery.min.js') }}" defer></script> -->

<script src="{{ asset('js/main.js') }}" defer></script>

<script>
    function showHideDiv() {
        var selectedValue = $('#donateFrequency option:selected').val();

        if (selectedValue != 'one_time')
            $('#frequencyDiv').show();
        else
            $('#frequencyDiv').hide();
    }

    // get the div element
    $('#100d').on('click', function(e) {
        $("#amount").val('100');
    });
    $('#200d').on('click', function(e) {
        $("#amount").val('200');
    });
    $('#500d').on('click', function(e) {
        $("#amount").val('500');
    });
    $('#1000d').on('click', function(e) {
        $("#amount").val('1000');
    });


    function defaultHideDive() {
        $('#frequencyDiv').hide();
    }
    defaultHideDive();
</script>

@stop