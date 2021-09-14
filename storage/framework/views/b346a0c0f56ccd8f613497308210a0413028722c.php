

<?php $__env->startSection("do-du-lieu"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/assets/css/product.css')); ?>">
<div class="col-md-12">  
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1>Products</h1>
        </div>
        <div class="panel-body">
        <form method="post" action="<?php echo e(route('products.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <!-- Name -->
            <div class="row mt-3">
                <div class="col-md-1">Name</div>
                <div class="col-md-8">
                    <input type="text" value="<?php echo e(isset($record->name)?$record->name:''); ?>" name="name" class="form-control" required>
                </div>
            </div>
            <!-- Name end -->

            <!-- Parent_id -->
            <?php if(isset($data)): ?>
            <div class="row mt-3">
                <div class="col-md-1">Course</div>
                <div class="col-md-3">
                    <select class="custom-select" name="parent_id">
                        <option selected></option>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="1"><?php echo e($row->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <?php endif; ?>
            <!-- Parent_id end -->

            <!-- Price & display -->
            <div class="row mt-3">
                <?php if(isset($data)): ?>
                <div class="col-md-1">Price</div>
                <div class="col-md-3">
                    <input class="form-control" type="text" name="price" placeholder="VND" required>
                </div>
                <?php endif; ?>
                <div class="col-md-1">Display</div>
                <div class="col-md-1">
                    <input type="checkbox" class="form-check-input" name="display">
                </div>
            </div>
            <!-- Price & display end-->
            
            <!-- Description -->
            <div class="row mt-3">
                <div class="col-md-1">Descript</div>
                <div class="col-md-7">
                    <textarea class="form-control" name ="description" rows="4"></textarea>
                </div>
            </div>
            <!-- Description end -->
            
            <!-- Created & updated -->
            <?php if(isset($data)): ?>
            <div class="row mt-3">
                <div class="col-md-1">Created</div>
                <div class="col-md-3">
                    <input type="datetime-local" value="" name="created_at" class="form-control" required>
                </div>
                <div class="col-md-1 ml-2">Updated</div>
                <div class="col-md-3">
                    <input type="datetime-local" value="" name="updated_at" class="form-control" required>
                </div>
            </div>
            <?php endif; ?>
            <!-- Created & updated end -->
              
            <!-- Button -->
            <div class="row mt-3">
                <div class="col-md-9"></div>
                <div class="col-md-1">
                    <a type="button" href="<?php echo e(route('products.index')); ?>" class="btn ml-3 btn_create_update">Cancel</a>
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn ml-3 btn_create_update">Save</button>
                </div>
            </div>
            <!-- Button end -->
        </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\course_laravel\resources\views/backend/product_create_update.blade.php ENDPATH**/ ?>