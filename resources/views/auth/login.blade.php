@extends('layouts.app')
@section('content')
<div class="main-wrapper login-body">
    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox">
                <div class="login-left"> <img class="img-fluid" src="https://www.dawsonareadevelopment.com/wp-content/uploads/2016/10/hospitality-icon.png" alt="Logo"> </div>
                <div class="login-right">
                    <div class="login-right-wrap">


                        <h1>Login</h1>
                            {{--message--}}
                            {!! Toastr::message() !!}
                            <p class="account-subtitle">Access to our dashboard</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> </div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                                <div class="form-group">
                                    <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>          <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">Login</button>
                            </div>
                        </form>
                        <div class="text-center forgotpass"><a href="{{ route('password.request') }}">Forgot Password?</a> </div>
                        <div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>
                        <div class="social-login"> <span>Login with</span> <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a> </div>
                        <div class="text-center dont-have">Don’t have an account? <a href="{{route('register')}}">Register</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

