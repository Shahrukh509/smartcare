@extends('layouts.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
     @if(Session::has('message'))
      <p class="alert alert-dismissable {{ Session::get('alert-class', 'alert-info') }}">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
    </button>


      {{ Session::get('message') }}
    </p>
     @endif
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users</h3>
               <span class="add-user">
                  <a type="button" class="Button" href="{{ route('add.user') }}" style="float:right;background-color:#007bff;color: #fff; border-radius:5px;">Add</a>
                </span>
              </div>

               
             
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th style="width: 40px">Status</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $data)
                    <tr>
                      <td>{{ $data->id }}</td>
                      <td>{{ $data->name }}</td>
                      <td>
                        {{$data->email }}
                      </td>
                      @if($data->user_status == 1)
                      <td><span class="badge bg-success">Active</span></td>
                      @elseif($data->user_status == 2)

                      <td><span class="badge bg-warning">Inactive</span></td>

                      @else
                       
                        <td><span class="badge bg-danger">Banned</span></td>


                      @endif
                       <td><a class="btn btn-link" href="{{ route('user.edit',$data->id) }}" >Edit<i class="fas fa-edit"></i></a>&nbsp;<a class="btn btn-link" href="{{ route('user.delete',$data->id) }}" onclick="return confirm('Are you sure to delete this?')">Delete<i class="fas fa-trash"></i></a> </td>
                    </tr>
                    @endforeach
                   
                
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  {{ $users->links() }}
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection



