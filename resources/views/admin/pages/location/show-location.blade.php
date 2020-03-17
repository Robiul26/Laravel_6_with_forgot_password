@extends('admin.layouts.master')
@section('title', 'All Location')
@section('content-header')
<h3 class="text-center"> All Location</h3>
@endsection

@section('main-content')
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2><a href="{{url('locations/create')}}"><i class="fa fa-plus"></i> Add New<span class="spinner-grow spinner-grow-sm text-success"></span></a></h2>
        
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
            <div class="card-box table-responsive">
              <div id="datatable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap no-footer">
                <div class="row">
                  <div class="col-sm-12">
                    <table id="datatable" class="table table-striped table-bordered dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="datatable_info">
                      <thead>
                        <tr role="row">
                          <th>#ID</th>
                          <th>Item Type</th>
                          <th >Store Name</th>
                          <th >Merchant Order ID</th>
                          <th >Name</th>
                          <th >Phone</th>
                          <th >Address</th>
                          <th >Amount</th>
                          <th >Date</th>
                          <th >Option</th>
                        </tr>
                      </thead>
                      <tr role="row" class="odd">
                        <td>dfgfd</td>
                        <td>dfgfd</td>
                        <td>dfgfd</td>
                        <td>dfgfd</td>
                        <td>dfgfd</td>
                        <td>dfgfd</td>
                        <td>dfgfd</td>
                        <td>dfgfd</td>
                        <td>dfgfd</td>
                        <td>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="row">

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