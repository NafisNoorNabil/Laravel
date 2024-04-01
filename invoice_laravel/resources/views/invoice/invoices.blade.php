<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoices</title>
    <link rel="stylesheet" href="/css/products.css">
</head>
<body>
    <h1>Invoices</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Total Amount</th>
            <th>Order Date</th>
        </tr>
        @foreach ($invoices as $invoice)
            <tr>
                <td>{{ $invoice->order->customer->name }}</td>
                <td>{{ $invoice->order->customer->email }}</td>
                <td>{{ $invoice->total_amount }}</td>
                <td>{{ $invoice->order->order_date }}</td>
   

            </tr>
        @endforeach
    </table>
</body>
</html>
