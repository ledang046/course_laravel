@extends("auth.layout_auth")

@section('title')
Register
@endsection

@section('title_logo')
<img src="{{asset('backend/images/logo1.png')}}" alt="Logo">
@endsection

@section('content')
<div class="panel-body text-center body">
  <form method="post" action="{{ route('register') }}">
    @csrf
    <!-- Name -->
    <div class="row" style="margin-top:5px;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <input type="text" name="name" class="form-control text" placeholder="User Name" required value="{{ old('name') }}" required autocomplete="name" autofocus>
        </div>
    </div>
    @if ($errors->has('name'))
        <div class="row">
            <div class="col-12">
               <p class="text-danger">{{ $errors->first('name') }}</p>
            </div>
        </div>
    @endif

    <!-- Email -->
    <div class="row" style="margin-top:15px;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <input type="email" name="email" class="form-control text" placeholder="Email" required autocomplete="email" autofocus>
        </div>
    </div>
    @if ($errors->has('email'))
        <div class="row">
            <div class="col-12">
               <p class="text-danger">{{ $errors->first('email') }}</p>
            </div>
        </div>
    @endif

    <!-- Password -->
    <div class="row" style="margin-top:15px;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <input type="password" name="password" class="form-control text"  placeholder="Password" required autocomplete="new-password">
        </div>
    </div>
    @if ($errors->has('password'))
        <div class="row">
            <div class="col-12">
                <p class="text-danger">{{ $errors->first('password') }}</p>
            </div>
        </div>
    @endif

    <!-- Password_confirmation -->
    <div class="row" style="margin-top:15px;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <input type="password" name="password_confirmation" class="form-control text"  placeholder="Password Confirm" required autocomplete="new-password">
        </div>
    </div>
    @if ($errors->has('password_confirmation'))
        <div class="row">
            <div class="col-12">
                 <p class="text-danger">{{ $errors->first('password_confirmation') }}</p>
            </div>
        </div>
    @endif

    <!-- Phone -->
    <div class="row" style="margin-top:15px;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <input type="text" name="phone" class="form-control text"  placeholder="Phone Number" required autocomplete="current-phone">
        </div>
    </div>
    @if ($errors->has('phone'))
        <div class="row">
            <div class="col-12">
                 <p class="text-danger">{{ $errors->first('phone') }}</p>
            </div>
        </div>
    @endif

    <!-- Address -->
    <div class="row" style="margin-top:15px;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <input type="text" name="address" class="form-control text"  placeholder="Address" required autocomplete="current-address">
        </div>
    </div>
    @if ($errors->has('address'))
        <div class="row">
            <div class="col-12">
                 <p class="text-danger">{{ $errors->first('address') }}</p>
            </div>
        </div>    
    @endif

    <div class="row" style="margin-top:50px;">
        <div class="col-md-12">
            <input type="submit" value="Register" class="btn btn_login"> 
        </div>
    </div>
  </form>
</div>
<div class="panel-footer text-center">
    <div class="row">
        <i class="fab fa-facebook" style="color:#4267B2;"></i>
         &emsp;
        <i class="fab fa-google" style="color:#DB4437;"></i>
        &emsp;
        <i class="fab fa-twitter" style="color:#1DA1F2;"></i>
    </div>
</div>
@endsection

