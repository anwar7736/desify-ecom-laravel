@extends('layouts.app')
@section('content')
<div class="bengalwey-logo">&nbsp;</div>
<div class="external-authentication hide">
   <div class="title">- or -</div>
   <div class="facebook-login-block">
      <div class="buttons">
         <a class="loginBtn loginBtn--facebook" href="https://www.deshify.com/facebookauthentication/login">
         Login with Facebook
         </a>
      </div>
   </div>
   <button  id="googlelogin-button" class="button-1 loginwithgoogle" ><i class="fa fa-google" style=" padding-right: 26px;"></i>Login With Google</button>
</div>
<div class="page registration-page"><br>
    <h4 class="text-center">Create Account</h4>
    @if(session()->has('msg'))
      <center>
         <strong class="text-danger">{{ session()->get('msg') }}</strong>
      </center>
    @endif
<div class="page-body">
   <form method="POST" action="{{ route('user.register') }}">
      @csrf
      <div class="fieldset">
         <div class="title">
            <strong>Your Personal Details</strong>
         </div>
      </div>
      <div class="fieldset">
         <div class="title">
            <strong>Your Contact Information</strong>
         </div>
         <div class="form-fields">
            <div class="inputs">
               <label for="name"> PROVIDE YOUR NAME</label>
               <br />
               <input type="text" id="name" name="name" value="{{ old('name') }}" required/>
               <span class="required">*</span>
               <span class="field-validation-valid" data-valmsg-for="name" data-valmsg-replace="true"></span>
               <div id="valid-msg" class="hide number-validation" style="color: green;margin-top: -30px;margin-bottom:30px;
                  margin-left: -12px;">✓</div>
            </div>
            <div class="inputs">
               <label for="email"> PROVIDE YOUR EMAIL</label>
               <br />
               <input type="email" id="email" name="email" value="{{ old('email') }}" required/>
               <span class="required">*</span>
               <span class="field-validation-valid" data-valmsg-for="email" data-valmsg-replace="true"></span>
               <div id="valid-msg" class="hide number-validation" style="color: green;margin-top: -30px;margin-bottom:30px;
                  margin-left: -12px;">✓</div>
            </div>            
            <div class="inputs">
               <label for="phone"> PROVIDE YOUR PHONE</label>
               <br />
               <input type="number" id="phone" name="phone" value="{{ old('phone') }}" required/>
               <span class="required">*</span>
               <span class="field-validation-valid" data-valmsg-for="phone" data-valmsg-replace="true"></span>
               <div id="valid-msg" class="hide number-validation" style="color: green;margin-top: -30px;margin-bottom:30px;
                  margin-left: -12px;">✓</div>
            </div>
            <div class="inputs">
                  <br>
                  <label for="password"> PROVIDE YOUR PASSWORD</label>
                  <br />
                  <input type="password" id="password" name="password" value="" required/>
                  <span class="required">*</span>
                  <span class="field-validation-valid" data-valmsg-for="password" data-valmsg-replace="true"></span>
                  <div id="valid-msg" class="hide number-validation" style="color: green;margin-top: -30px;margin-bottom:30px;
                     margin-left: -12px;">✓</div>
                  <div id="error-msg" class="hide number-validation" style="color: red;margin-top: -30px;margin-bottom:30px;
                     margin-left: -12px;">✗</div>
               </div>
            </div>
         </div>
         <div class="buttons">
            <input type="submit" id="register-button" class="button-1 register-next-step-button" value="SIGN UP"/>
         </div>
         <div class="registerpage-footer">
            <div class="condition-part">
               <div>By creating and account, you agree to deshify's </div>
               <div>Condition's of use and privacy notice</div><br>
               <div><a href="{{ route('login')}}" class="text-danger">Already have an Account? Login</a></div>
            </div>
         </div>
   </form>
   </div>
</div>
@endsection