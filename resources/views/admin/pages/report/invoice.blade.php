<!DOCTYPE html>
<html lang="en">

<head>
  <title>CMIS | Invoice</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    .border {
      border: 1px dashed gray;
      margin-left: 20px;
    }
    img{
      margin-top: 5px;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="row">


      @if(count($orders)>0)
      <?php $count = 0; ?>
      @foreach($orders as $order)@if($count<=1) <div class="col-xs-3 border" style="margin-bottom:40px;">
        <div style="width: 20%; margin-left:35%;">
          <img width="50" src="uploads/logo.jpg" alt="Company logo">
        </div>
        <div class="text-left">
          <p><strong>Name: {{$order->recipient_name}}</strong></p>
          <p>Address: {{$order->recipient_address}}</p>
          <p>Phone: {{$order->recipient_phone}}</p>
          <p>MOID: {{$order->merchant_order_id}}</p>
          <p>Amount: {{$order->amount_to_collect}}</p>
        </div>
    </div>
    <?php $count++; ?>
    @else
    <div class="clearfix"></div>
    <div class="col-xs-3 border" style="margin-bottom:40px;">
      <div style="width: 20%; margin-left:35%;">
        <img width="50" src="uploads/logo.jpg" alt="Company logo">
      </div>
      <div class="text-left">
        <p><strong>Name: {{$order->recipient_name}}</strong></p>
        <p>Address: Mohakhali Dhaka</p>
        <p>Phone: 0123232323</p>
        <p>MOID: PPP0000011</p>
        <p>Amount: TK.560.00</p>
      </div>
    </div>
    <?php $count = 0; ?>
    @endif


    @endforeach

    <?php //echo pdf();
    ?>
    @endif



  </div>
  </div>

</body>

</html>