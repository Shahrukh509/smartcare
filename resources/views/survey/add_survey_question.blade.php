  @extends('layouts.master')
  @section('content')
  <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
  <div class="container-fluid">
  <div class="row mb-2">
  <div class="col-sm-12">
  <div class="card-header">
  <h3 class="card-title">Add Survey Question</h3>
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
  <form id="survey_add" action="{{ route('survey.question.add',$id) }}" method="post">
  @csrf

    <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title mt-2">Horizontal Form</h3>
                 <a id ="add_question"class="btn btn-outline-secondary float-right">Add more question&nbsp; +</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                
                <div class="card-body">
                  <div id="first_ques">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-md-2 col-sm-2 col-form-label">Add Question</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="question" placeholder="Add Question">
                    </div>
                  </div>
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-md-2 col-sm-2 col-form-label">Option 1</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="option1" name="option1" placeholder="Write Option 1">
                    </div>
                  </div>
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-md-2 col-sm-2 col-form-label">Option 2</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Option 2"  name="option2" placeholder="Write Option 2">
                    </div>
                  </div>

                   <div class="form-group row">
                    <label for="inputEmail3" class="col-md-2 col-sm-2 col-form-label">Option 3</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="option3" placeholder="Write Option 3">

                    </div>
                  
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-md-2 col-sm-2 col-form-label">Option 4</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="option4" placeholder="Write Option 4">

                    </div>
                  
                  </div>

                 <hr>
                </div>
             
                <div id="more_ques">

                </div>
                   </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Add </button>
                  
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
  var id=1;

  $(document).on('click','#add_question',function(){

    // console.log('hamza don');
    if(id <= 3){
    $('#first_ques').children().clone().appendTo('#more_ques');
    id= parseInt(id) + 1;
  } else{

    window.alert('You can not add more than 4 questions')
  }

  
    

  });
</script>


  @endsection