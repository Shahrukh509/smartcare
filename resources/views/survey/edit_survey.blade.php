  @extends('layouts.master')
  @section('content')
  <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
  <div class="container-fluid">
  <div class="row mb-2">
  <div class="col-sm-12">
  <div class="card-header">
  <h3 class="card-title">Add User</h3>
  @if ($errors->any())
  <div class="alert alert-dismissable alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
    </button>

  <strong>Whoops!</strong> There were some problems with your input.<br><br>
  <ul>
  @foreach ($errors->all() as $error)
  <li> {{ $error }} </li>
  @endforeach
  </ul>
  </div>
  @endif


  </div>
  <!-- /.card-header -->
  <div class="card-body">
  <form action="{{ route('user.update',$data->id) }}" method="post">
  @csrf
  <div class="row">


  <div class="col-md-6">
   

  <div class="form-group">
  <label for="">User's Name</label>
  <input type="text" class="form-control" id="" name="name" value="{{ $data->name}}" placeholder="Enter User's name" required>
  </div>


  </div>
  <div class="col-md-6">

    <div class="form-group">
  <label for="">User's Email</label>
  <input type="email" class="form-control" id="" name="email" value="{{ $data->email }}"placeholder="Enter User's email" required>
  </div>

  <div class="form-group">
  <label>User Status</label>
  <select class="form-control" name="user_status" style="width: 100%;">
  <option value=""selected disabled>Select status</option>
  <option {{ $data->user_status === 1? 'selected':'' }} value="1">Active</option>
  <option {{ $data->user_status === 2? 'selected':'' }} value="2">Inactive</option>
  <option {{ $data->user_status === 3? 'selected':'' }} value="3">Banned</option>
  </select>
  </div>

  </div>
  </div>
  <div class="row">
  <div class="col-md-12">
  <div class="form-group">
  <button class="btn btn-primary add_user"type="submit">Update</button>
  </div>
  </div>
  </div>
  </form>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>

  @endsection