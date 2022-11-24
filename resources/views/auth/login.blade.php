@extends('layouts.master-without-nav')

@section('title')
Login
@endsection
@section('css')
<style>
body,
html {
    height: 100%;
}

body {
    position: relative;
}

.account-pages {
    transform: translate(-50%, -50%);
    position: absolute;
    a;
    top: 50%;
    left: 50%;
    width: 100%;
    margin: 0 !important;
}
.form-control{
    color: #314667 !important;
}

</style>
@endsection
@section('body')

<body>

    @endsection

    @section('content')
    <!-- <div class="home-btn d-none d-sm-block">
        <a href="{{url('index')}}" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div> -->
        @if ($notification = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $notification }}</strong>
                        </div>
                    @endif
                    @if ($notification = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $notification }}</strong>
                        </div>
                    @endif
    <div class="account-pages my-4">
        <div class="container">
            <div class="login_logo">
                <!--<img src="assets/images/logo-dark.png">-->
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                   <div class="card border border-secondary">
                <!--- cadetblue; --->
                        <div class="card-body pt-0" style="background:#314667">

                            <div class="p-2">
                                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="col-12">
                                    <div class="text-primary p-4" style="align-content: center;
                                        justify-content: center;
                                        display: flex;">
                                       <div class="">
                                            <div class="row" style="align-content: center;justify-content: center;display: flex;">

                                                <div class="col-12 align-self-end mob_imiage_part">
                                                <img src="{{url('assets/images/img/admin_app_logo_white.png')}}" width="auto">


                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                    <div class="form-group">
                                        <label for="username" style="color:white;">Email</label>
                                        <input name="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" @if(old('email'))
                                            value="{{ old('email') }}" @else value="" @endif
                                            id="username" placeholder="Enter email" autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="userpassword"  style="color:white;">Password</label>
                                        <input type="password" name="password"
                                            class="form-control  @error('password') is-invalid @enderror"
                                            id="userpassword" value="" placeholder="Enter password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    {{-- Captcha field --}}

                                        {{-- <div class="form-group">
                                            <label style="color:white;">Recaptcha</label>
                                            {!! NoCaptcha::renderJs() !!}
                                            {!! NoCaptcha::display() !!}
                                            @if ($errors->has('g-recaptcha-response')) <p style="margin-top: 0.25rem;                                     font-size: 80%;
                                        color: #f46a6a;font-weight: bolder;">{{ $errors->first('g-recaptcha-response') }}</p> @endif
                                        </div> --}}



                                    <div class="d-flex justify-content-between">

                                        <div class="text-left">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="customControlInline" name="remember_me">
                                                <label class="custom-control-label" for="customControlInline"  style="color:white;">Remember
                                                    me</label>
                                            </div>
                                        </div>
                                        <div class="forgot_pass text-right">
                                            <a href="password/reset"  style="color:white;"> Forgot password?</a>
                                        </div>
                                    </div>


                            </div>

                            <div class="mt-3">
                                <button class="btn btn-warning btn-block waves-effect waves-light" type="submit">Log
                                    In</button>
                            </div>

                            <!-- <div class="mt-4 text-center">
                                        <h5 class="font-size-14 mb-3">Sign in with</h5>

                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="javascript::void()" class="social-list-item bg-primary text-white border-primary">
                                                    <i class="mdi mdi-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript::void()" class="social-list-item bg-info text-white border-info">
                                                    <i class="mdi mdi-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript::void()" class="social-list-item bg-danger text-white border-danger">
                                                    <i class="mdi mdi-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div> -->

                            <!-- <div class="mt-4 text-center">
                                        <a href="password/reset" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
                                    </div> -->
                            </form>
                        </div>
                    </div>

                </div>

                <!--   <div class="text-center" style="    width: 100%;">

                    <p class="mb-0">© <script>
                        document.write(new Date().getFullYear())
                        </script> NewsFirst</p>
                </div> -->

            </div>
        </div>
    </div>
    </div>
    @endsection
