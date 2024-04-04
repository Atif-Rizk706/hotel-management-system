@extends('layouts.app')
@section('content')
<div class="main-wrapper login-body">
    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox">
                <div class="login-left"> <img class="img-fluid" src="https://www.dawsonareadevelopment.com/wp-content/uploads/2016/10/hospitality-icon.png" alt="Logo"> </div>
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Forgot Password?</h1>
                        <p class="account-subtitle">Enter your email to get a password reset link</p>
                        {{--message--}}
                        {!! Toastr::message() !!}
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form-group">
                                <input id="email" placeholder="Email" type="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
                                @enderror
                            </div>
                            <div class="form-group mb-0">
                                <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
                            </div>
                        </form>
                        <div class="text-center dont-have">Remember your password? <a href="{{route('login')}}">Login</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


