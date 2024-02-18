@extends('users.master')

@section('title', 'Dashboard')

@section('content_header')
<h1>Users</h1>
@stop

@section('content')

<div class="page-bg-image" style="display: flex; flex-direction:column;">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-3" style="margin-top: 40px;">
        <form method="post" action="{{route('user.post.login')}}">
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
              <label class="mt-3" for="email">Email</label><br>
              <input type="email" id="email" autocomplete="off" class="fadeIn second" style="width: 100%;" name="email" placeholder="Email Address">
              <label class="mt-3" for="password">Password</label>
              <input type="password" id="password" style="width: 100%;" class="fadeIn third col-md-12 mt-sm-4" name="password" placeholder="Password">
              <div class="card-body text-right mt-sm-6" style="font-size: 14px;"><a href="{{route('user.forgotpassword')}}">Forgot Password?</a></div>

            </div>
            <button type="submit" style="padding-top:15px; padding-bottom:15px;" class="btn btn-block btn-primary mt-sm-3 fadeIn fouth">LOGIN</button>
          </div>
          <br>
          <div class="border-top card-body text-center mt-sm-6">Need an account?<b> <a href="{{route('registration')}}">Sign up</a></b></div>
        </form>
      </div>
    </div>
  </div>

</div>

<hr style="color: red; border-color: #E5104D; border-width:2px;" />

@include('users.fixed.footer')

@endsection


@section('myjsfile')
<!-- Styles -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}" defer></script>

<script src="{{ asset('js/main.js') }}" defer></script>

@stop