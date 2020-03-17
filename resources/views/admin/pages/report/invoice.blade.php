<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoice</title>
  <link href="assets/backend/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #fff;
    }

    .page-break {
      page-break-after: always;
    }

    .hr {
      border-top: 1px dashed gray;
    }
  </style>
</head>

<body>
  @if(count($orders)>0)
  @foreach($orders as $order)
  <div class="content-wrapper mb-5">
    <div class="float-left">
      <img width="150" src="uploads/logo.jpg" alt="Company logo">
    </div>
    <div class="float-right">
      <p class="m-0">Creation Edge</p>
      <p class="m-0">
        34/1-A Hatkhola Road
        Dhaka, Bangladesh
      </p>
      <p class="m-0">Dhaka 1203</p>
      <p class="m-0">Phone : 01755-616058</p>
      <p class="m-0">Email : omiointernational@gmail.com</p>
    </div>
    <div class="clearfix"></div>
    <h2 class="text-center bg-secondary text-light">Purchase Summary</h2>
    <div class="float-left">
      <p class="m-0">Invoice To</p>
      <p class="m-0"><strong>{{$order->name}}</strong></p>
      <p class="m-0">Address:{{$order->address}}</p>
      <p class="m-0">Phone: {{$order->phone}}</p>
    </div>
    <div class="float-right">
      <p class="m-0">Document No: PK10kdjfl-0000000</p>
      <p class="m-0">Order Number: 1092898398839</p>
      <p class="m-0">Order Date: {{$order->created_at}}</p>
    </div>
    <div class="clearfix"></div>
    <h6 class="p-2">Type of Supplay: Cash On Delivery</h6>
    <table class="table table-striped table-bordered mb-5">
      <thead class="bg-dark text-light">
        <tr role="row">
          <th class="align-middle">Merchant Order ID</th>
          <th class="align-middle">Name</th>
          <th class="align-middle">Phone</th>
          <th class="align-middle">Address</th>
          <th class="align-middle">Amount</th>
        </tr>
      </thead>
      <tr role="row" class="odd">
        <td>{{$order->merchant_order_id}}</td>
        <td>{{$order->name}}</td>
        <td>{{$order->phone}}</td>
        <td>{{$order->address}}</td>
        <td>{{$order->amount}}</td>
      </tr>
    </table>
    <div class="clearfix"></div>
    <div class="hr"></div>
  </div>
  @endforeach
  @else
  <p class="text-center text-danger">No Order Today</p>
  @endif
</body>

</html>