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
                                <label for="deliveryType">Delivery Type</label>
                                <input type="text" name="deliveryType" class="form-control" value="{{ old('deliveryType')}}" id="deliveryType" placeholder="Store Name">
                                @if ($errors->has('deliveryType'))
                                <p class="text-danger">
                                    <small>{{ $errors->first('deliveryType') }}</small>
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="storeId">Store ID</label>
                                <input type="text" name="storeId" class="form-control" id="storeId" placeholder="storeId">
                                @if ($errors->has('storeId'))
                                <p class="text-danger">
                                    <small>{{ $errors->first('storeId') }}</small>
                                </p>
                                @endif
                            </div>
                        </div>
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
                                <label for="recipientName">Name</label>
                                <input type="text" name="recipientName" class="form-control" value="{{ old('recipientName')}}" id="recipientName" placeholder="Recipient Name">
                                @if ($errors->has('recipientName'))
                                <p class="text-danger">
                                    <small>{{ $errors->first('recipientName') }}</small>
                                </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" class="form-control" value="{{ old('phone')}}" id="phone" placeholder="Phone number">
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
                                <input type="text" name="address" class="form-control" value="{{ old('address')}}" id="address" placeholder="Address">
                                @if ($errors->has('address'))
                                <p class="text-danger">
                                    <small>{{ $errors->first('address') }}</small>
                                </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="txtCity">City</label>
                                <input type="text" name="txtCity" class="form-control" value="{{ old('txtCity')}}" id="txtCity" placeholder="City">
                                @if ($errors->has('txtCity'))
                                <p class="text-danger">
                                    <small>{{ $errors->first('txtCity') }}</small>
                                </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="txtZone">Zone</label>
                                <input type="text" name="txtZone" class="form-control" value="{{ old('txtZone')}}" id="txtZone" placeholder="Zone">
                                @if ($errors->has('txtZone'))
                                <p class="text-danger">
                                    <small>{{ $errors->first('txtZone') }}</small>
                                </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="txtAria">Aria</label>
                                <input type="text" name="txtAria" class="form-control" value="{{ old('txtAria')}}" id="txtAria" placeholder="Aria">
                                @if ($errors->has('txtAria'))
                                <p class="text-danger">
                                    <small>{{ $errors->first('txtAria') }}</small>
                                </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="itemQty">Item Quantity</label>
                                <input type="number" name="itemQty" class="form-control" value="{{ old('itemQty')}}" id="itemQty" placeholder="Item Quantity">
                                @if ($errors->has('itemQty'))
                                <p class="text-danger">
                                    <small>{{ $errors->first('itemQty') }}</small>
                                </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="spInstruction">Special Instraction</label>
                                <input type="text" name="spInstruction" class="form-control" value="{{ old('spInstruction')}}" id="spInstruction" placeholder="Special Instraction">
                                @if ($errors->has('spInstruction'))
                                <p class="text-danger">
                                    <small>{{ $errors->first('spInstruction') }}</small>
                                </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="itemWeight">Item Weight</label>
                                <input type="number" name="itemWeight" class="form-control" value="{{ old('itemWeight')}}" id="itemWeight" placeholder="Item Weight">
                                @if ($errors->has('itemWeight'))
                                <p class="text-danger">
                                    <small>{{ $errors->first('itemWeight') }}</small>
                                </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="itemDesc">Item Description</label>
                                <input type="text" name="itemDesc" class="form-control" value="{{ old('itemDesc')}}" id="itemDesc" placeholder="Item Description">
                                @if ($errors->has('itemDesc'))
                                <p class="text-danger">
                                    <small>{{ $errors->first('itemDesc') }}</small>
                                </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="txtPrice">Price</label>
                                <input type="number" name="txtPrice" class="form-control" value="{{ old('txtPrice')}}" id="txtPrice" placeholder="Price">
                                @if ($errors->has('txtPrice'))
                                <p class="text-danger">
                                    <small>{{ $errors->first('txtPrice') }}</small>
                                </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="number" name="amount" class="form-control" value="{{ old('amount')}}" id="amount" placeholder="amount">
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