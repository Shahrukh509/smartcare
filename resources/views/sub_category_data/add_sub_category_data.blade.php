  @extends('layouts.master')
  @section('content')
  <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
  <div class="container-fluid">
  <div class="row mb-2">
  <div class="col-sm-12">
  <div class="card-header">
  <h3 class="card-title">Add Survey</h3>
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
  <form action="{{ route('sub_category_data.added') }}" method="post">
  @csrf
  <div class="row">


  <div class="col-md-6">

  <div class="form-group">
  <label>Select Nature</label>

  <select class="form-control" id="nature" name="nature_id" style="width: 100%;">


  <option value="" selected disabled>Select Nature</option>
  @foreach($nature as $nat)
  <option value="{{ $nat->id }}">{{ $nat->name }}</option>
  @endforeach

  </select>
  </div>


  <div class="form-group">
  <label>Select Sub Category</label>
  <select class="form-control" id="sub_category" name="sub_category_id" style="width: 100%;">
  <option value=""selected disabled>Select Sub Category</option>


  </select>
  </div>



   <div class="form-group">
  <label for="">Survey Description</label>
  <input type="text" class="form-control" id="" name="description" value="{{ old('name') }}" placeholder="Enter surveys description" required>
  </div>




  </div>




  <div class="col-md-6">

  <div class="form-group">
  <label>Select Category</label>
  <select class="form-control" id="category" name="category_id" style="width: 100%;">
  <option value=""selected disabled>Select Category</option>


  </select>
  </div>

 
 <div class="form-group">
  <label for=""> Survey Title</label>
  <input type="text" class="form-control" id="" name="title" value="{{ old('name') }}" placeholder="Enter survey title" >
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

  <script type="text/javascript">


  $(document).on('change','#nature', function(){

  var id=  $('#nature').val();
  $.ajax({
  type: 'GET',
  url: '{{ route("get_subcategories") }}',
  data: {id :id},
  dataType: "json",
  success: function (data) {

    // console.log(data);return false;
  $('#category').find('option').remove();
  $('#category').append($('<option value="" selected disabled>Select Category</option>'));
  $.each(data.alldata, function(index,value){
   
  $('#category').append($('<option value="'+value.id+'">'+value.name+'</option>')
  );
  })

  $(document).on('change','#category', function(){


    $('#sub_category').find('option').remove();
  $('#sub_category').append($('<option id="" selected disabled>Select Sub Category</option>'));

    var category_id = $('#category').val();

    // console.log(category_id);return false;
    $.each(data.sub_category, function(index,value){

      // console.log(value);return false;
      if(value.category_id == category_id){
        $('#sub_category').append($('<option value="'+value.id+'">'+value.name+'</option>'))



      }
    })


  })
  




  }
  });


  });
  </script>

  @endsection