@extends('broker.layouts.master')

@section('title', 'Broker Settings')
@section('description', 'Settings')

@section('content')
<div class="row">
	<div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Basic Profile</h4>
            <div class="form-group row">
              <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Username</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Username" value="{{ $data->username }}">
                <a type="button" class="" data-toggle="modal" data-target="#modal1">Update Username</a>
              </div>
            </div>
            <div class="form-group row">
              <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email" value="{{ $data->email }}">
                <a type="button" class="" data-toggle="modal" data-target="#modal2">Update Email</a>
              </div>
            </div>
            <div class="form-group row">
              <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="exampleInputMobile" placeholder="Mobile number" value="{{ $data->mobile }}">
                <a type="button" class="" data-toggle="modal" data-target="#modal3">Update Phone Number</a>
              </div>
            </div>
        </div>
      </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Username</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('broker.updateusername')}}" method="post">
            @csrf
      	<div class="modal-body">
	        <div class="mb-3">
	            <label for="username" class="form-label">Username</label>
	            <input type="text" class="form-control" name="username" value="{{ $data->username }}">
	        </div>
      	</div>
      	<div class="modal-footer">
        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        	<button type="submit" class="btn btn-primary">Save changes</button>
      	</div>
  	  </form>
    </div>
  </div>
</div>
<!-- Modal 2 -->
<div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Email</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('broker.updateemail')}}" method="post">
            @csrf
      	<div class="modal-body">
	        <div class="mb-3">
	            <label for="email" class="form-label">Email</label>
	            <input type="email" class="form-control" name="email" value="{{ $data->email }}">
	        </div>
      	</div>
      	<div class="modal-footer">
        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        	<button type="submit" class="btn btn-primary">Save changes</button>
      	</div>
  	  </form>
  	</div>
  </div>
</div>
<!-- Modal 3 -->
<div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Mobile Number</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('broker.updatenumber')}}" method="post">
            @csrf
      	<div class="modal-body">
	        <div class="mb-3">
	            <label for="mobile" class="form-label">Phone Number</label>
	            <input type="text" class="form-control" name="mobile" value="{{ $data->mobile }}">
	        </div>
      	</div>
      	<div class="modal-footer">
        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        	<button type="submit" class="btn btn-primary">Save changes</button>
      	</div>
  	  </form>
    </div>
  </div>
</div>

@endsection