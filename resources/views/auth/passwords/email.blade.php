@extends("auth.layout_auth")

@section('title')
Forgot password
@endsection

@section('title_logo')
Forgot Password
@endsection

@section('content')
<div class="panel-body text-center body">
<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <div class="row" style="margin-top:5px;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
        </div>
    </div>

    <div class="row" style="margin-top:50px;">
        <div class="col-md-12">
            <input type="submit" class="btn btn_login" value="Send Password Reset Link">
        </div>
    </div>

    @error('email')
    <div class="row" style="margin-top:20px;">
      <div class="alert alert-danger">
         <strong>{{ $message }}</strong>
      </div>
    </div>
    @enderror
    @if (session('status'))
    <div class="row" style="margin-top:20px;">
      <div class="alert alert-success" role="alert">
         <strong>{{ session('status') }}</strong>
      </div>
    </div>
    @endif
</form>
</div>
               
@endsection

