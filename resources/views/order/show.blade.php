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
                    <h1>My account - Order Details</h1>
                    <div class="row">
                        <div class="col-sm-3" style="margin:4px">
                            Invoice No : #{{ $order['invoice_no'] }}
                        </div>
                        <div class="col-sm-3" style="margin:4px">
                            Invoice Date : {{ $order['transaction_date'] }}
                        </div>                        
                        <div class="col-sm-3" style="margin:4px">
                            Customer : {{ $order['customer']['first_name'] }}
                        </div>                        
                        <div class="col-sm-3" style="margin:4px">
                            Payment Method : {{ $order['payment_method'] }}
                        </div>
                        <div class="col-sm-3" style="margin:4px">
                            Subtotal : {{ $order['amount'] }}
                        </div>
                        <div class="col-sm-3" style="margin:4px">
                            Delivery Charge : {{ $order['shipping_charge'] }}
                        </div> 
                        <div class="col-sm-3" style="margin:4px">
                            Discount : {{ $order['total_discount'] }}
                        </div>                        
                        <div class="col-sm-3" style="margin:4px">
                            Final Total : {{ $order['total'] }}
                        </div>                       
                        <div class="col-sm-3" style="margin:4px">
                            Order Status : <span class="badge" style="background:green">{{ $order['status'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="page-body">
                    <div class="no-data">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#Sl</th>
                                        <th>Product</th>
                                        <th>Variation</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Discount</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($order['lines'] as $key=> $line)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $line['product']['name'] }}</td>
                                        <td>{{ $line['variation']['name'] }}</td>
                                        <td>{{ $line['quantity'] }}</td>
                                        <td>{{ $line['sell_price_inc_tax'] }}</td>
                                        <td>{{ $line['discount'] }}</td>
                                        <td>{{ $line['total'] }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                    <td style="color:red" class="text-center" colspan="10">No Order Found!</td>
                                    </tr>
                                    @endforelse
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
    
</script>
@endpush