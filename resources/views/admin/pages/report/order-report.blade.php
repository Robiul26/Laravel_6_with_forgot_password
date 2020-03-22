@extends('admin.layouts.master')
@section('title', 'All Order')
@section('content-header')
<h3 class="text-center"> <a class="btn btn-info" href="{{url('invoice-pdf-show')}}"><i class="fa fa-folder-open"></i> GeneratePDF</a>
Today Orders
<a class="btn btn-info" href="{{url('invoice-pdf-download')}}"><i class="fa fa-download"></i> DownloadPDF</a></h3>
@endsection

@section('main-content')
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <!-- <div class="x_title">
        <h2><a href="{{url('orders/create')}}"><i class="fa fa-plus"></i> Add New<span class="spinner-grow spinner-grow-sm text-success"></span></a></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div> -->
      <div class="x_content">
        <div class="row">
          <div class="col-sm-12">
            <div class="card-box table-responsive">
              <div id="datatable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap no-footer">
                <div class="row">
                  @if(count($orders)>0)
                  @foreach($orders as $order)
                  <div class="col-sm-6 p-4">
                    <div class="row">
                      <div class="col-sm-6">
                        <img style="" width="110" src="{{asset('uploads/logo.jpg')}}" alt="Company logo">
                      </div>
                      <div class="col-sm-6">
                        <div class="float-right">
                          <p class="m-0"><b>Creation Edge</b></p>
                          <p class="m-0">
                            34/1-A Hatkhola Road
                            Dhaka, Bangladesh
                          </p>
                          <p class="m-0">Dhaka 1203</p>
                          <p class="m-0">Phone : 01755-616058</p>
                          <p class="m-0">Email : omiointernational@gmail.com</p>
                        </div>
                      </div>
                    </div>
                    <h2 class="text-center bg-secondary text-light m-0">Purchase Summary</h2>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="float-left">
                          <p class="m-0">Invoice To</p>
                          <p class="m-0"><strong>{{$order->recipient_name}}</strong></p>
                          <p class="m-0">Address:{{$order->recipient_address}}</p>
                          <p class="m-0">Phone: {{$order->recipient_phone}}</p>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="float-right">
                          <p class="m-0">Document No: PK10kdjfl-0000000</p>
                          <p class="m-0">Order Number: 1092898398839</p>
                          <p class="m-0">Order Date: {{$order->created_at}}</p>
                        </div>
                      </div>
                    </div>
                    <h6 class="p-2">Type of Supplay: Cash On Delivery</h6>
                    <table id="datatable" class="table table-striped table-bordered dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="datatable_info">
                      <thead class="bg-dark text-light">
                        <tr role="row">
                          <th class="sorting align-middle" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 25px;">Merchant Order ID</th>
                          <th class="sorting align-middle" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 25px;">Name</th>
                          <th class="sorting align-middle" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 25px;">Phone</th>
                          <th class="sorting align-middle" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 25px;">Address</th>
                          <th class="sorting align-middle" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 25px;">Amount</th>
                        </tr>
                      </thead>
                      <tr role="row" class="odd">
                        <td>{{$order->merchant_order_id}}</td>
                        <td>{{$order->recipient_name}}</td>
                        <td>{{$order->recipient_phone}}</td>
                        <td>{{$order->recipient_address}}</td>
                        <td>{{$order->amount_to_collect}}</td>
                      </tr>
                    </table>
                  </div>
                  @endforeach
                  @else
                  <p class="text-center text-danger">No Report Available Today</p>
                  @endif
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