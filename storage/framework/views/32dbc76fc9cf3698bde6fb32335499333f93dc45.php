  
  <?php $__env->startSection('content'); ?>
  <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
  <div class="container-fluid">
  <div class="row mb-2">
  <div class="col-sm-12">
  <div class="card-header">
  <h3 class="card-title">Add Sub Category</h3>
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
  <form action="<?php echo e(route('sub_category.added')); ?>" method="post">
  <?php echo csrf_field(); ?>
  <div class="row">
  

  <div class="col-md-6">

  <div class="form-group">
  <label>Select Category</label>
   
  <select class="form-control" name="category_id" style="width: 100%;">


  <option value=""selected disabled>Select Category</option>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </select>
  </div>

  

  <div class="form-group">
  <label for=""> Sub Category's Description</label>
  <input type="text" class="form-control" id="" name="description" value="<?php echo e(old('description')); ?>" placeholder="Enter Sub Category's Description" >
  </div>

  </div>




  <div class="col-md-6">


  <div class="form-group">
  <label for="">Sub Category's Name</label>
  <input type="text" class="form-control" id="" name="name" value="<?php echo e(old('name')); ?>" placeholder="Enter Category's Name" required>
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

 

  

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\smartcare\resources\views/sub_category/add_sub_category.blade.php ENDPATH**/ ?>