  
  <?php $__env->startSection('content'); ?>
  <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
  <div class="container-fluid">
  <div class="row mb-2">
  <div class="col-sm-12">
  <div class="card-header">
  <h3 class="card-title">Add Survey</h3>
  <?php if($errors->any()): ?>
  <div class="alert alert-dismissable alert-danger">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>

  <strong>Whoops!</strong> There were some problems with your input.<br><br>
  <ul>
  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <li> <?php echo e($error); ?> </li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ul>
  </div>
  <?php endif; ?>


  </div>
  <!-- /.card-header -->
  <div class="card-body">
  <form action="<?php echo e(route('sub_category_data.added')); ?>" method="post">
  <?php echo csrf_field(); ?>
  <div class="row">


  <div class="col-md-6">

  <div class="form-group">
  <label>Select Nature</label>

  <select class="form-control" id="nature" name="nature_id" style="width: 100%;">


  <option value="" selected disabled>Select Nature</option>
  <?php $__currentLoopData = $nature; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <option value="<?php echo e($nat->id); ?>"><?php echo e($nat->name); ?></option>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
  <input type="text" class="form-control" id="" name="description" value="<?php echo e(old('name')); ?>" placeholder="Enter surveys description" required>
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
  <input type="text" class="form-control" id="" name="title" value="<?php echo e(old('name')); ?>" placeholder="Enter survey title" >
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
  url: '<?php echo e(route("get_subcategories")); ?>',
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

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\smartcare\resources\views/sub_category_data/add_sub_category_data.blade.php ENDPATH**/ ?>