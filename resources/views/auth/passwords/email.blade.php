<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Hotel login</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://www.dawsonareadevelopment.com/wp-content/uploads/2016/10/hospitality-icon.png">
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::to('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::to('assets/plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::to('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::to('assets/css/style.css')}}"> </head>

<body>
<div class="main-wrapper login-body">
    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox">
                <div class="login-left"> <img class="img-fluid" src="https://www.dawsonareadevelopment.com/wp-content/uploads/2016/10/hospitality-icon.png" alt="Logo"> </div>
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Forgot Password?</h1>
                        <p class="account-subtitle">Enter your email to get a password reset link</p>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
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
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
</body>

</html>
