<style>
    .nav-link {
        color: #E5104D !important;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 150px;">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('frontend/assets/img') }}/gostudy_logo.png" alt="Logo" width="100" height="100" class="d-inline-block align-top">

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('frontend.user')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Members</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('sponsors')}}">Sponsors</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">

                @if(!Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="{{route('loginshow')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('registration')}}">Create Account</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="#">{{auth()->user()->name}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.logout')}}">Logout</a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" style="background-color: #0E3051; padding-right:20px; border-radius:8px; padding-left:20px; color: white !important" href="{{route('donate')}}">Donate</a>
                </li>
            </ul>
        </div>
    </div>
</nav>