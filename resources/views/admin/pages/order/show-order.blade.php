@extends('admin.layouts.master')
@section('title', 'All Order')
@section('content-header')
<h3 class="text-center"> All Orders</h3>
@endsection

@section('main-content')
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2><a href="{{url('orders/create')}}"><i class="fa fa-plus"></i> Add New<span class="spinner-grow spinner-grow-sm text-success"></span></a></h2>
        <a class="btn btn-info ml-3" href="{{url('report')}}">Today Report</a>
        <a class="btn btn-info" href="#">Date wise Report</a>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="row">
          <div class="col-sm-12">
            <div class="card-box">
              <div id="datatable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap no-footer">
                <div class="row">
                  <div class="col-sm-2">
                    <div class="dataTables_length" id="datatable_length"><label>Show <select name="datatable_length" aria-controls="datatable" class="form-control input-sm">
                          <option value="10">10</option>
                          <option value="25">25</option>
                          <option value="50">50</option>
                          <option value="100">100</option>
                        </select> entries</label></div>
                  </div>
                  <div class="col-sm-6">
                    <div id="datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></label></div>
                  </div>
                </div>
                <form action="">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="">Start Date</label>
                        <input class="form-control datepicker">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="">End Date</label>
                        <input class="form-control datepicker">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <input class="btn btn-info" type="submit" value="OK">
                      </div>
                    </div>
                  </div>
                </form>
                <div class="row">
                  <div class="col-sm-12">

                    <table id="datatable" class="table table-responsive table-striped table-bordered dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="datatable_info">
                      <thead>
                        <tr role="row">
                          <th>#ID</th>
                          <th>Store ID</th>
                          <th>Marchant Order ID</th>
                          <th>Customer Name</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>City</th>
                          <th>Zone</th>
                          <th>Area</th>
                          <th>Delivery Time</th>
                          <th>Item Type</th>
                          <th>Instraction</th>
                          <th>QTY</th>
                          <th>Weight</th>
                          <th>Price</th>
                          <th>Amount</th>
                          <th>Date</th>
                          <th>Option</th>
                        </tr>
                      </thead>
                      @foreach($orders as $order)
                      <tr role="row" class="odd">
                        <td>{{$order->id}}

                        </td>
                        <td>{{$order->store_id}}</td>
                        <td>{{$order->merchant_order_id}}</td>
                        <td>{{$order->recipient_name}}</td>
                        <td>{{$order->recipient_phone}}</td>
                        <td>{{$order->recipient_address}}</td>
                        <td>{{$order->recipient_city}}</td>
                        <td>{{$order->recipient_zone}}</td>
                        <td>{{$order->recipient_area}}</td>
                        <td>
                          @if($order->delivery_type==48)
                          Normal Delivery(48-72 hours)
                          @else
                          On Demand Delivery (same day)
                          @endif
                        </td>
                        <td>{{$order->item_type}}</td>
                        <td>{{$order->special_instruction}}</td>
                        <td>{{$order->item_quantity}}</td>
                        <td>{{$order->item_weight}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->amount_to_collect}}</td>
                        <td>{{$order->created_at}}</td>
                        <td>
                          <a href="{{ url('/orders/'.$order->id.'/edit') }}" class="text-primary"><i class="fa fa-edit fa-lg"></i> |</a>
                          <a class="text-danger" href="#" onclick="event.preventDefault(); document.getElementById('edit-form-{{$order->id}}').submit();"> <i class="fa fa-trash fa-lg"></i></a>

                          <form id="edit-form-{{$order->id}}" action="{{ url('/orders/'.$order->id) }}" method="POST" style="display: none;">
                            @method('delete')
                            @csrf
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </table>
                  </div>
                </div>
                <div class="row">
                  {{$orders->links()}}
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