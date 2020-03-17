@extends('admin.layouts.master')
@section('title', 'Add Order')
@section('content-header')
<h3 class="text-center">Create Order Form</h3>
@endsection

@section('main-content')
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2><a href="{{url('orders/')}}"><i class="fa fa-eye"></i> Preview</a></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br>
                <form role="form" action="{{ url('orders') }}" method="post" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="form-row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="itemType">Item Type</label>
                                <input type="text" name="itemType" class="form-control" value="{{ old('itemType')}}" id="itemType" placeholder="Item Type">
                                @if ($errors->has('itemType'))
                                <p class="text-danger">
                                    <small>{{ $errors->first('itemType') }}</small>
                                </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="storeName">Store Name</label>
                                <input type="text" name="storeName" class="form-control" value="{{ old('storeName')}}" id="storeName" placeholder="Store Name">
                                @if ($errors->has('storeName'))
                                <p class="text-danger">
                                    <small>{{ $errors->first('storeName') }}</small>
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="merchantOrderId">Merchant Order Id</label>
                                <input type="text" name="merchantOrderId" class="form-control" value="{{ old('merchantOrderId')}}" id="merchantOrderId" placeholder="Merchant Order Id">
                                @if ($errors->has('merchantOrderId'))
                                <p class="text-danger">
                                    <small>{{ $errors->first('merchantOrderId') }}</small>
                                </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                                @if ($errors->has('name'))
                                <p class="text-danger">
                                    <small>{{ $errors->first('name') }}</small>
                                </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone number">
                                @if ($errors->has('phone'))
                                <p class="text-danger">
                                    <small>{{ $errors->first('phone') }}</small>
                                </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                                @if ($errors->has('address'))
                                <p class="text-danger">
                                    <small>{{ $errors->first('address') }}</small>
                                </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="number" name="amount" class="form-control" id="amount" placeholder="amount">
                                @if ($errors->has('amount'))
                                <p class="text-danger">
                                    <small>{{ $errors->first('amount') }}</small>
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="submit" name="saveRole" class="btn btn-primary" value="Save Order">
                                <a href="{{ url('orders/create')}}" class="btn btn-danger">Reset</a>
                            </div>
                        </div>
                    </div>

                </form><!-- end form -->
            </div>
        </div>
    </div>
</div>






@endsection