@forelse($orders as $key=> $order)
<tr>
    <td>{{ $key + 1 }}</td>
    <td>#{{ $order['invoice_no'] }}</td>
    <td>{{ $order['transaction_date'] }}</td>
    <td>{{ $order['customer']['first_name'] }}</td>
    <td>{{ $order['phone'] }}</td>
    <td>{{ $order['amount'] }}</td>
    <td>{{ $order['total_discount'] }}</td>
    <td>{{ $order['shipping_charge'] }}</td>
    <td>{{ $order['total'] }}</td>
    <td><span class="badge" style="background:gray">{{ $order['payment_method'] }}</span></td>
    <td><span class="badge" style="background:green">{{ $order['status'] }}</span></td>
    <td><a href="{{ route('order.show', $order['id']) }}" class="btn btn-info btn-sm">View</a></td>
    

</tr>
@empty
<tr>
    <td style="color:red" class="text-center" colspan="10">No Order Found!</td>
</tr>
@endforelse