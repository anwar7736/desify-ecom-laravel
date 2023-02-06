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
<div class="page registration-page">
    <div class="page-body">
        <form method="post" action="https://www.deshify.com/CustomerLogin">
            
            <div class="fieldset">
                <div class="title">
                    <strong>Your Personal Details</strong>
                </div>
                <div class="form-fields">
                    <div class="inputs hidden">
                        <label for="FirstName">Full Name:</label>
                        <input type="text" data-val="true" data-val-required="Full Name is required." id="FirstName" name="FirstName" value="Unknown" />
                        <span class="required">*</span>
                        <span class="field-validation-valid" data-valmsg-for="FirstName" data-valmsg-replace="true"></span>
                    </div>

                    <div class="inputs hidden">
                        <label for="Email">Email:</label>
                        <input type="email" data-val="true" data-val-email="Wrong email" data-val-required="Email is required." id="Email" name="Email" value="System.Input.No.Email.replace@deshfy.com" />
                        <span class="required">*</span>
                        <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                    </div>
                                    </div>
            </div>
                            <div class="fieldset">
                    <div class="title">
                        <strong>Your Contact Information</strong>
                    </div>
                    <div class="form-fields">
                            <div class="inputs">
                                <label for="Phone"> PLEASE ENTER YOUR MOBILE  NUMBER:</label>
                                <br />
                                <input type="tel" id="Phone" name="Phone" value="" />
                                    <span class="required">*</span>
                                <span class="field-validation-valid" data-valmsg-for="Phone" data-valmsg-replace="true"></span>
                                <div id="valid-msg" class="hide number-validation" style="color: green;margin-top: -30px;margin-bottom:30px;
    margin-left: -12px;">✓</div>
                                <div id="error-msg" class="hide number-validation" style="color: red;margin-top: -30px;margin-bottom:30px;
    margin-left: -12px;">✗</div>
                            </div>
                                            </div>
                </div>
                            <div class="fieldset">
                    <div class="title">
                        <strong>Options</strong>
                    </div>
                    <div class="form-fields">
                                                    <div style="display:none">

                                        <div class="inputs custom-attributes">
            <label>I am:</label>

        <ul class="option-list">
                <li>
                    <input id="customer_attribute_1_1" type="checkbox" name="customer_attribute_1" value="1"  />
                    <label for="customer_attribute_1_1">Merchant</label>
                </li>
                <li>
                    <input id="customer_attribute_1_2" type="checkbox" name="customer_attribute_1" value="2"  />
                    <label for="customer_attribute_1_2">Supplier</label>
                </li>
                <li>
                    <input id="customer_attribute_1_12" type="checkbox" name="customer_attribute_1" value="12" checked="checked"  />
                    <label for="customer_attribute_1_12">Neutral</label>
                </li>
        </ul>
                    </div>
        <div class="inputs custom-attributes">
            <label>Apply for:</label>

        <ul class="option-list">
                <li>
                    <input id="customer_attribute_3_3" type="checkbox" name="customer_attribute_3" value="3"  />
                    <label for="customer_attribute_3_3">Merchant</label>
                </li>
                <li>
                    <input id="customer_attribute_3_4" type="checkbox" name="customer_attribute_3" value="4"  />
                    <label for="customer_attribute_3_4">Supplier</label>
                </li>
        </ul>
                    </div>

                            </div>
                    </div>
                </div>
                        <div class="fieldset">

            </div>
            <div class="fieldset">
                <div class="title">
                    <strong>Your Password</strong>
                </div>
                <div class="form-fields hidden">


                    <input data-val="true" data-val-length="The password should have at least 6 characters." data-val-length-max="999" data-val-length-min="6" data-val-required="Password is required." id="Password" name="Password" type="hidden" value="123456" />
                    <input data-val="true" data-val-equalto="The password and confirmation password do not match." data-val-equalto-other="Password" data-val-required="Password is required." id="ConfirmPassword" name="ConfirmPassword" type="hidden" value="123456" />

                                    </div>
            </div>


            <div class="buttons">
                <input type="submit" id="register-button" class="button-1 register-next-step-button" value="                  LOGIN / SIGN UP              " name="register-button" />

            </div>
            
            <div id="divMsg" style="display:none; text-align:center">
                <img src="https://www.deshify.com/images/loading.gif" />
            </div>

            <div class="registerpage-footer">
                <div class="condition-part">
                    <div>By creating and account, you agree to deshify's </div>
                    <div>Condition's of use and privacy notice</div>
                </div>
            </div>

        <input name="__RequestVerificationToken" type="hidden" value="CfDJ8HGB7sDKOh1Ejkv-hnOS7jvXdV7mfm2KjrXN3SNWhcwTZkFxRWBsYUNKkqe2dvo3Ge9InGqwClxfRuoD04N0hNLZpHVNfir1g-eHeWr2IyZv5ROquunHM-K-IJ-SYXBZqJTt2_SZhnyGwYt5sX7VfgU" /></form>

    </div>
</div>

@endsection