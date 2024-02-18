@extends('users.layouts.authlayout')

@section('title', 'Dashboard')

@section('content_header')
<h1>Users</h1>
@stop

@section('content')

<div class="page-bg-image" style="display: flex; flex-direction:column;">

  <div class="row">

    <div class="container">


      <div class="row">

        <div class="col-md-6 offset-3" style="margin-top: 40px;">
          @csrf
          <!-- Login Form -->
          <div class="row">


            @if ($message = Session::get('error'))
            <div class="col-md-12" role="alert">
              <div class="alert alert-danger mb-4" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                  </svg></button>
                {{$message}}
              </div>
            </div>
            @endif

            <div style="width: 100%;">

              <form method="post" action="{{route('user.store')}}">
                @csrf
                <!-- Login Form -->
                <div class="row">


                  @if($errors->any())
                  <div class="alert alert-danger col-md-12">
                    <ul>
                      @foreach($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                  @endif


                  @if(session()->has('message'))
                  <p class="alert alert-success col-md-12">{{session()->get('message')}}</p>
                  @endif


                  @csrf
                  <label class="mt-3" for="full_name">Full Name</label>
                  <input type="text" id="full_name" placeholder="First Name" class="fadeIn first col-md-12" name='full_name' autofocus="">
                  <label class="mt-3" for="email">Email address</label>
                  <input type="email" id="email" placeholder="Email address" class="fadeIn first col-md-12" name='email' autofocus="">
                  <label class="mt-3" for="first_name">Password</label>
                  <input type="password" id="password" placeholder="Password" class="fadeIn first col-md-12" name='password' autocomplete="off" autofocus="">
                  <label class="mt-3" for="first_name">Confirm Password</label>
                  <input type="password" id="password" placeholder="Confirm Password" class="fadeIn first col-md-12" name="confirm_password">
                  <div class="checkbox mb-3">
                  </div>
                  <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">CREATE ACCOUNT</button>
                </div>
              </form>


            </div>
          </div>
          <br>
          <div class="border-top card-body text-center mt-sm-6">Already have an account?<b><br> <a href="{{route('loginshow')}}">Login</a></b></div>

        </div>
      </div>
    </div>

  </div>



  <hr style="color: red; border-color: #E5104D; border-width:2px;" />

  @include('users.fixed.footer')
</div>


@endsection