

<?php $__env->startSection("do-du-lieu"); ?>
<div class="col-md-12">  
    <div class="panel panel-primary">
        <div class="panel-heading"><h4>Edit user</h4></div>
        <div class="panel-body">
        <form method="post" action="<?php echo e(url('admin/users/'.$record->id)); ?>" enctype="multipart/form-data">
              <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Name</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo e(isset($record->name)?$record->name:''); ?>" name="name" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Email</div>
                <div class="col-md-10">
                    <input type="email" value="<?php echo e(isset($record->email)?$record->email:''); ?>" <?php if(isset($record->email)): ?> disabled <?php endif; ?> name="email" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Password</div>
                <div class="col-md-10">
                <input type="password" name="password" <?php if(isset($record->email)): ?> placeholder="Không đổi password thì không nhập thông tin vào ô textbox này" <?php else: ?> required <?php endif; ?> class="form-control">
                </div>
            </div>
             <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Phone</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo e(isset($record->phone)?$record->phone:''); ?>" name="phone" class="form-control" required>
                </div>
            </div>

             <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Address</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo e(isset($record->address)?$record->address:''); ?>" name="address" class="form-control" required>
                </div>
            </div>
              <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Upload image</div>
                <div class="col-md-10">
                    <input type="file" name="photo">
                </div>
             </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="submit" value="Process" class="btn btn-primary">
                </div>
            </div>
            <!-- end rows -->
        </form>
        </div>
    </div>
    <?php echo $__env->make('backend.form-error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\course_laravel\resources\views/backend/user_create_update.blade.php ENDPATH**/ ?>