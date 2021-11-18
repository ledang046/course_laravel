@extends("auth.layout_auth")

@section('title')
  Login
@endsection

@section('title_logo')
<img src="{{asset('backend/images/logo1.png')}}" alt="Logo">
@endsection

@section('content')
<div class="panel-body text-center body">
  <form method="post" action="{{ route('login') }}">
    @csrf
    <!-- Email -->
    <div class="row" style="margin-top:5px;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <input type="email" name="email" class="form-control text" placeholder="Email" required autocomplete="email" autofocus>
        </div>
    </div>

    <!-- Password -->
    <div class="row" style="margin-top:15px;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <input type="password" name="password" class="form-control text"  placeholder="Password" required autocomplete="current-password">
        </div>
    </div>


    <div class="row" style="margin-top:10px;margin-bottom:30px;">
        <div class="col-md-5">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
        <div class="col-md-7">
          <a class="forgot_pass" href="{{ route('password.request') }}">Forgot Password?</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="row">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <div class="row" style="margin-top:50px;">
        <div class="col-md-12">
            <input type="submit" value="Login" class="btn btn_login"> 
        </div>
    </div>
  </form>
</div>
<div class="panel-footer text-center">
    <div class="row ">
        <p class="link_signup">Don't have account? <a href="{{ route('register') }}">Signup Now</a></p>
    </div>
    <div class="row">
        <i class="fab fa-facebook" style="color:#4267B2;"></i>
         &emsp;
        <i class="fab fa-google" style="color:#DB4437;"></i>
        &emsp;
        <i class="fab fa-twitter" style="color:#1DA1F2;"></i>
    </div>
</div>
@endsection
   