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
                <h2 class="" style="font-weight:bold; margin-left:0px; text-align: center; color:#0E3051">NON CASH DONATION</h2>
                <div class='msg_three'></div>

            </div>
        </div>

        <div class="row">


            <div class="col-md-6 form-group">

                <div class="row">

                    <div class="col-md-12 form-group" id="studyItemsDiv" style="margin-top: 40px; display: flex; background-color:#0E3051; border-radius:10px; padding:20px; display:flex;justify-content: center;flex-direction:column">
                        <h4 style="color: white;font-weight:bold">Donation Items</h4>
                        <div style="background-color: white;height:2px;margin-bottom:20px;margin-top:20px"></div>


                    </div>
                </div>
            </div>

            <div class="col-md-6" style=" justify-content:center; align-items:center; flex-direction:column">
                <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

                <div class="col-md-12 form-group" id="cartItemsDiv" style="margin-top: 40px; display: flex; background-color:#0E3051; border-radius:10px; padding:20px; display:flex;justify-content: center;flex-direction:column">
                    <h4 style="color: white;font-weight:bold">Cart Items</h4>
                    <div style="background-color: white;height:2px;margin-bottom:20px;margin-top:20px"></div>

                    <div style="display:flex;flex-direction:row; margin-bottom: 10px; padding:10px; justify-content: space-between; align-items: center">
                        <div style="flex:1">
                            <h5 style="color:white">Items</h5>
                        </div>
                        <div style="flex:1; display:flex; justify-content:flex-end">
                            <h5 style="color:white">Quantity</h5>
                        </div>
                        <div style="flex:1; display:flex; justify-content:flex-end">
                            <h5 style="color:white">Price</h5>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row" style="">

                <div class="col-md-11">

                    <div class="col form-group" style="margin-top: 40px; display:flex;justify-content: center;flex-direction:column" id="frequencyDiv">
                        <label class="" for="email">Payment Method</label>
                        <select id="payment_intervals" class="form-control" style="background-color: #0E3051; color:white;" name="payment_intervals" onchange="showHideDiv()">
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
    </div>
</section>
<!-- 
<section style="padding-top: 80px;padding-bottom:80px;">
    <div class="container">
        <h4 class="card-title" style="font-weight:bold;color:#E5104D; text-align: left;">NARRATION </h4>

        <textarea rows="4" class="row form-control" style="background-color: #D9D9D9; padding:20px">

        </textarea>
    </div>
</section> -->


<section style="padding-top: 80px;padding-bottom:80px;">
    <div class="container">

        <div class="row" style="flex-direction: row; justify-content: space-between;">

            @if(Auth::check())
            <button type="button" style="padding-top:10px; padding-bottom:10px;" class="btn btn-primary mt-sm-3 fadeIn fouth">Save</button>
            @endif
            <button type="button" id="payNow" style="padding-top:10px; padding-bottom:10px;" class="btn btn-primary mt-sm-3 fadeIn fouth">Pay Now</button>

        </div>
</section>



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

    var myCars = [{
            item: "Desktop Computer",
            price: 200
        },
        {
            item: "Laptop Computer",
            price: 120
        },
        {
            item: "White board",
            price: 40
        },
        {
            item: "Software",
            price: 300
        },
        {
            item: "Textbooks",
            price: 10
        },
        {
            item: "Computer",
            price: 190
        },
        {
            item: "Accessories",
            price: 70
        },
        {
            item: "Desks",
            price: 60
        },
        {
            item: "Chair",
            price: 30
        }
    ];

    var cartItems = [];
    var total = 0;


    function generateItems() {


        for (var x = 0; x < myCars.length; x++) {

            $('#studyItemsDiv').append('<div style="display:flex;flex-direction:row; margin-bottom: 10px; padding:10px; justify-content: space-between;">' +
                '<div style="flex:1">' +
                '    <h5>' +
                '        <font color="white">' + myCars[x].item + '</font>' +
                '    </h5>' +
                '</div>' +
                '<div style="flex:1; display:flex; justify-content:flex-end">' +
                '    <h5>' +
                '        <font color="white">$' + myCars[x].price + '</font>' +
                '       <button onclick="addToCart(\'' + myCars[x].item + '\')" class="btn btn-info" style="margin:0; padding-right:20px; padding-left:20px; padding-top:10px; padding-bottom:10px"> + </button' +
                '    </h5>' +
                '</div>' +
                '</div>');
        }
    }

    generateItems();

    function addToCart(myitem) {
        console.log(myitem);

        total = 0;

        $('#cartItemsDiv').html('<h4 style="color: white;font-weight:bold">Cart Items</h4>' +
            '<div style="background-color: white;height:2px;margin-bottom:20px;margin-top:20px"></div>' +
            '<div style="display:flex;flex-direction:row; margin-bottom: 10px; padding:10px; justify-content: space-between; align-items: center">' +
            '    <div style="flex:1">' +
            '        <h5 style="color:white">Items</h5>' +
            '    </div>' +
            '    <div style="flex:1; display:flex; justify-content:flex-end">' +
            '        <h5 style="color:white">Quantity</h5>' +
            '    </div>' +
            '    <div style="flex:1; display:flex; justify-content:flex-end">' +
            '        <h5 style="color:white">Price</h5>' +
            '    </div>' +
            '</div>');

        var newItem = myCars.find(item => item.item == myitem);

        if (newItem) {

            var newCartItemIndex = cartItems.findIndex(item => item.item == myitem);

            if (newCartItemIndex != -1) {

                cartItems[newCartItemIndex].price += newItem.price;
                cartItems[newCartItemIndex].quantity++;

            } else {

                cartItems.push({
                    ...newItem,
                    quantity: 1
                })
            }
            // myCars.filter(item => item.item != myitem);
        }

        console.log(cartItems);

        renderCart();
    }

    function removeFromCart(myitem) {
        console.log(myitem);

        total = 0;

        const index = cartItems.findIndex(item => item.item == myitem);

        console.log(index);
        if (index > -1) { // only splice array when item is found
            cartItems.splice(index, 1); // 2nd parameter means remove one item only
        }

        renderCart();
    }

    function updatedCart(y) {
        var inputElements = document.getElementsByTagName("input");

        var thirdInputValue = inputElements[y].value;

        if (thirdInputValue == '') return;

        total = 0;

        let currentItem = cartItems[y].item;
        
        let newItem = myCars.find((element) => element.item == currentItem);

        let currentPrice = newItem.price;

        cartItems[y].price = currentPrice * Number(thirdInputValue);
        cartItems[y].quantity = Number(thirdInputValue);

        renderCart();
    }

    function renderCart() {

        $('#cartItemsDiv').html('<h4 style="color: white;font-weight:bold">Cart Items</h4>' +
            '<div style="background-color: white;height:2px;margin-bottom:20px;margin-top:20px"></div>' +
            '<div style="display:flex;flex-direction:row; margin-bottom: 10px; padding:10px; justify-content: space-between; align-items: center">' +
            '    <div style="flex:1">' +
            '        <h5 style="color:white">Items</h5>' +
            '    </div>' +
            '    <div style="flex:1; display:flex; justify-content:flex-end">' +
            '        <h5 style="color:white">Quantity</h5>' +
            '    </div>' +
            '    <div style="flex:1; display:flex; justify-content:flex-end">' +
            '        <h5 style="color:white">Price</h5>' +
            '    </div>' +
            '</div>');

        for (var x = 0; x < cartItems.length; x++) {

            total += cartItems[x].price;

            $('#cartItemsDiv').append('<div style="display:flex;flex-direction:row; margin-bottom: 10px; background-color: #888; padding:10px; justify-content: space-between; align-items: center">' +
                '<div style="flex:1">' +
                '    <h5>' +
                '        <font color="white">' + cartItems[x].item + '</font>' +
                '    </h5>' +
                '</div>' +
                '<div style="flex:1; display:flex; justify-content:flex-end">' +
                '    <h5>' +
                '        <input style="color:white; width: 40px; padding:5px" oninput="updatedCart(' + x + ')" value="' + cartItems[x].quantity + '"/>' +
                '    </h5>' +
                '</div>' +
                '<div style="flex:1; display:flex; justify-content:flex-end">' +
                '    <h5>' +
                '        <font color="white">$' + cartItems[x].price + '</font>' +
                '       <button onclick="removeFromCart(\'' + cartItems[x].item + '\')" class="btn btn-danger" style="margin:0; padding-right:20px; padding-left:20px; padding-top:10px; padding-bottom:10px"> x </button' +
                '    </h5>' +
                '</div>' +
                '</div>');
        }

        $('#cartItemsDiv').append('<div style="display:flex;flex-direction:row; margin-bottom: 10px; padding:10px; justify-content: space-between; align-items: center">' +
            '<div style="flex:1">' +
            '    <h5>' +
            '        <font color="white">Total</font>' +
            '    </h5>' +
            '</div>' +
            '<div style="flex:1; display:flex; justify-content:flex-end">' +
            '    <h5>' +
            '        <font color="white">$' + total + '</font>' +
            '    </h5>' +
            '</div>' +
            '</div>');

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


    $('#payNow').on('click', function(e) {

        var data_info = {
            cart_items: cartItems
        }

        $('.msg_three').html('<div></div>');

        $.ajax({
            url: '/donate-non-cash',
            type: 'post',
            data: data_info,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {

                console.log(response);

                if (response.status) {
                    cartItems = [];
                    $('#cartItemsDiv').html('<h4 style="color: white;font-weight:bold">Cart Items</h4>' +
                        '<div style="background-color: white;height:2px;margin-bottom:20px;margin-top:20px"></div>' +
                        '<div style="display:flex;flex-direction:row; margin-bottom: 10px; padding:10px; justify-content: space-between; align-items: center">' +
                        '    <div style="flex:1">' +
                        '        <h5 style="color:white">Items</h5>' +
                        '    </div>' +
                        '    <div style="flex:1; display:flex; justify-content:flex-end">' +
                        '        <h5 style="color:white">Quantity</h5>' +
                        '    </div>' +
                        '    <div style="flex:1; display:flex; justify-content:flex-end">' +
                        '        <h5 style="color:white">Price</h5>' +
                        '    </div>' +
                        '</div>');
                    $('.msg_three').html('<div class="alert alert-success" style="font-size:14px;"><h4> ' + response.message + '</h4></div>');
                } else {
                    $('.msg_three').html('<div class="alert alert-danger" style="font-size:14px;"><h4> ' + response.message + '</h4></div>');
                }

            },
            error: function(jqXHR, status, error) {


                $('.render_page').addClass("bg-danger");
                var msg = '';
                if (jqXHR.status === 0) {
                    msg = 'Not connected\n Verify Network.';
                } else if (jqXHR.status == 404) {
                    msg = 'Requested page not found. [404]';
                } else if (jqXHR.status == 500) {
                    msg = 'Internal Server Error [500].';
                } else {
                    msg = 'Uncaught Error.\n' + error;
                }

                $('.render_page').html(msg);
            },
            xhr: function() {
                var xhr = $.ajaxSettings.xhr();
                xhr.onprogress = function e() {
                    // For downloads
                    if (e.lengthComputable) {
                        console.log(e.loaded / e.total);
                        $(".render_page").html(e.loaded / e.total);
                    }
                };
                xhr.upload.onprogress = function(e) {
                    // For uploads
                    if (e.lengthComputable) {
                        console.log(e.loaded / e.total);
                    }
                };
                return xhr;
            }
        }).done(function() {
            $('.render_page').removeClass("bg-danger");
        });

    });




    function defaultHideDive() {
        $('#frequencyDiv').hide();
    }
    defaultHideDive();
</script>

@stop