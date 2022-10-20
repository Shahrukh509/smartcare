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
                <h3 class="card-title">Surveys</h3>&nbsp;

                <a type="button" class="Button" href="{{ url('add.user') }}" style="background-color:#007bff;color: #fff; border-radius:5px;">Add Category</a>
                <a type="button" class="Button" href="{{ url('add.user') }}" style="background-color:#007bff;color: #fff; border-radius:5px;">Add Sub Category</a>
                <a type="button" class="Button" href="{{ url('add.user') }}" style="background-color:#007bff;color: #fff; border-radius:5px;">Add Sub Category Data</a>
               <span class="add-user">
                  <a type="button" class="Button" href="{{ url('add.user') }}" style="float:right;background-color:#007bff;color: #fff; border-radius:5px;">Add</a>
                </span>
              </div>

               
             
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th>Nature</th>
                      <th>Category</th>
                      <th style="width: 40px">Sub Category</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  {{--   @foreach($survey as $data) --}}
                    <tr>
                      <td>420</td>
                      <td>Pros</td>
                      <td>
                        Relationship
                      </td>
                      <td>You are very responsible</td>
                       <td><a class="btn btn-link" href="{{ url('user.edit') }}" >Edit<i class="fas fa-edit"></i></a>&nbsp;<a class="btn btn-link" href="{{ url('user.delete') }}" onclick="return confirm('Are you sure to delete this?')">Delete<i class="fas fa-trash"></i></a> </td>
                    </tr>
                   {{--  @endforeach --}}
                   
                
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  {{-- {{ $surveys->links() }} --}}
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection



