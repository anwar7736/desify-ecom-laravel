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
                    <h1>My account - Orders</h1>
                </div>
                <div class="page-body">
                    <div class="no-data">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#Sl</th>
                                        <th>Invoice No</th>
                                        <th>Date</th>
                                        <th>Customer</th>
                                        <th>Phone</th>
                                        <th>Amount</th>
                                        <th>Discount</th>
                                        <th>Charge</th>
                                        <th>Final Amount</th>
                                        <th>Pay With</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="order-table">

                                </tbody>
                            </table>
                        </div>
                    </div>
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
    $(document).ready(function(){
        $.ajax({
            url: "{{ route('order.index') }}",
            method: 'GET',
            success: function(res){
                    if(res.html){
                        $("tbody#order-table").html(res.html);
                    }
            }
        })
    });
</script>
@endpush