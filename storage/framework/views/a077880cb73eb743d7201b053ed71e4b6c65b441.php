<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
     <?php if(Session::has('message')): ?>
      <p class="alert alert-dismissable <?php echo e(Session::get('alert-class', 'alert-info')); ?>">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
    </button>


      <?php echo e(Session::get('message')); ?>

    </p>
     <?php endif; ?>
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Surveys</h3>&nbsp;

               <span class="add-user">
                  <a type="button" class="btn btn btn-primary" href="<?php echo e(route('sub_category_data.add')); ?>" style="float:right;border-radius:5px;">Add Survey</a>
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
                     
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <?php $__currentLoopData = $all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr> 
                      <td><?php echo e($data->id); ?></td> 
                      <td><?php echo e($data->sub_category->category->nature->name); ?></td>
                    <td><?php echo e($data->sub_category->category->name); ?></td> 
                    <td><?php echo e($data->sub_category->name); ?> </td>
                     <td><?php echo e($data->title); ?></td> 
                    <td><?php echo e($data->description); ?></td>
                    <td><?php $__currentLoopData = $data->surveyquestions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ques): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($ques->question); ?> | <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                    <td><a class="btn btn-link" href="<?php echo e(route
                    ('survey.edit',$data->id)); ?>" >Edit <i class="fas
                    fa-edit"></i></a> &nbsp; <a class="btn btn-link" href="<?php echo e(route('add.question',$data->id)); ?>" >Add Question<i class="fas
                    fa-plus"></i></a><a class="btn btn-link" href="<?php echo e(route('survey.delete',$data->id)); ?>" onclick="return confirm
                    ('Are you sure to delete this?')">Delete <i class="fas
                    fa-trash"></i></a> </td> </tr>
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\smartcare\resources\views/survey/get_all.blade.php ENDPATH**/ ?>