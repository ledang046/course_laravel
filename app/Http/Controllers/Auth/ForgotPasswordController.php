<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */
    
    /*
      Linh chi tiết về class SendsPasswordResetEmails
      https://github.com/guiwoda/laravel-framework/blob/master/src/Illuminate/Foundation/Auth/SendsPasswordResetEmails.php
    */
    use SendsPasswordResetEmails;
    
}
