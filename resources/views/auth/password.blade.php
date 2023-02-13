@extends('layouts.app')
@section('content')
<div id="master-wrapper-content" class="master-wrapper-content">
<div class="master-column-wrapper">
    <div class="container">
        <div class="row twoColumnRow">
            @include('component.profile-sidebar')
            <div class="col-sm-9 center-2">
                <div class="page account-page order-list-page">
                <div class="page-title">
                    <h1>My account - Change Password</h1>
                </div>
                <div class="page-body">
                    <form method="POST" action="{{ route('password.update') }}" id="change-password-form">
                        @csrf
                    <div class="fieldset">
                        <div class="title">
                            <strong>Your Personal Details</strong>
                        </div>
                        <div class="form-fields">
                        <div class="inputs">
                                <label for="old_pass">Old Password:</label>
                                <input type="password" id="old_pass" name="old_pass" required>
                                <input type="hidden" name="user" value="{{ auth_info()['id'] }}">
                                <span class="required">*</span>
                            </div> 
                            
                            <div class="inputs">
                                <label for="new_pass">New Password:</label>
                                <input type="password" id="new_pass" name="new_pass" required>
                                <span class="required">*</span>
                            </div>
                            
                        </div>
                        <div class="">
                            <input type="submit" value="Submit" name="save-info-button" class="button-1 save-customer-info-button">
                        </div>
                    </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
@push('js')
<script>
    $(document).on('submit', 'form#change-password-form', function(e){
        e.preventDefault();
        $(document).find('span.error').text('');
        let url = $(this).attr('action');
        let method = $(this).attr('method');
        let data = $(this).serialize();
        $.ajax({
            url,
            method,
            data,
            beforeSend: function(){
                $('input.save-customer-info-button').attr('disabled', true);
            },
            success: function(res){
                $('input.save-customer-info-button').attr('disabled', false);
                if(res.success)
                {
                    toastr.success(res.msg);
                    location.reload();
                }
                else{
                    toastr.error(res.msg);
                }
            },
            error:function (response){
            $('input.save-customer-info-button').attr('disabled', false);
            $.each(response.responseJSON.errors,function(name,error){
                $(document).find('[name='+name+']').after('<span style="color:red" class="error">' +error+ '</span>');
                toastr.error(error);
            })
        }
        })
    });
</script>
@endpush