  @extends('layouts.master')
  @section('content')
  <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
  <div class="container-fluid">
  <div class="row mb-2">
  <div class="col-sm-12">
  <div class="card-header">
  <h3 class="card-title">Add Category</h3>
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
  <form action="{{ route('category.added') }}" method="post">
  @csrf
  <div class="row">


    <div class="col-md-6">

  <div class="form-group">
  <label>Select Nature</label>
  <select class="form-control" name="nature_id" style="width: 100%;">
  <option value=""selected disabled>Select status</option>
  <option value="1">Pros</option>
  <option value="2">Cons</option>
  </select>
  </div>

  <div class="form-group">
  <label for="">Category's Description</label>
  <input type="text" class="form-control" id="" name="description" value="{{ old('description') }}" placeholder="Enter Category's Description" >
  </div>

  </div>


  <div class="col-md-6">

  <div class="form-group">
  <label for="">Category's Name</label>
  <input type="text" class="form-control" id="" name="name" value="{{ old('name') }}" placeholder="Enter Category's Name" required>
  </div>

  


  </div>
  
  </div>
  <div class="row">
  <div class="col-md-12">
  <div class="form-group">
  <button class="btn btn-primary add_user"type="submit">Add</button>
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