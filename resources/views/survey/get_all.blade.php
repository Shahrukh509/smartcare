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

               <span class="add-user">
                  <a type="button" class="btn btn btn-primary" href="{{ route('sub_category_data.add') }}" style="float:right;border-radius:5px;">Add Survey</a>
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
                         <th>Sub Category</th>
                      <th>Survey Title</th>
                      <th>Survey Description</th>
                       <th>Survey Question</th>
                     {{--  <th style="width: 40px">Sub Category</th> --}}
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    {{-- @php $sno = 1;@endphp --}}
                    @foreach($all as $data)

                    <tr> 
                      <td>{{ $data->id }}</td> 
                      <td>{{ $data->sub_category->category->nature->name }}</td>
                    <td>{{ $data->sub_category->category->name }}</td> 
                    <td>{{ $data->sub_category->name }} </td>
                     <td>{{ $data->title }}</td> 
                    <td>{{ $data->description }}</td>
                    <td>@foreach($data->surveyquestions as $ques){{ $ques->question }} | @endforeach</td>
                    <td><a class="btn btn-link" href="{{ route
                    ('survey.edit',$data->id) }}" >Edit <i class="fas
                    fa-edit"></i></a> &nbsp; <a class="btn btn-link" href="{{ route('add.question',$data->id) }}" >Add Question<i class="fas
                    fa-plus"></i></a><a class="btn btn-link" href="{{ route('survey.delete',$data->id) }}" onclick="return confirm
                    ('Are you sure to delete this?')">Delete <i class="fas
                    fa-trash"></i></a> </td> </tr>
                    {{-- @php $sno+=1;
                    @endphp --}}
                    @endforeach

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



