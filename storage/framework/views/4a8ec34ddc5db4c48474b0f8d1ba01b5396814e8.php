

<?php $__env->startSection("do-du-lieu"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/assets/css/category.css')); ?>">
<div class="col-md-12">  
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1>Products</h1>
        </div>
        <div class="panel-body">
        <form method="post" action="<?php echo e($action); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php if(isset($record)): ?>
                <?php echo method_field('PUT'); ?>
            <?php endif; ?>
            <!-- Name -->
            <div class="row mt-3">
                <div class="col-md-1">Name</div>
                <div class="col-md-8">
                    <input type="text" 
                        value="<?php echo e(isset($record->name) ? $record->name:''); ?>" 
                        name="name" 
                        class="form-control" 
                        required
                    >
                </div>
            </div>
            <!-- Name end -->

            <!-- Display -->
            <div class="row mt-3">
                <div class="col-md-1">Display</div>
                <div class="col-md-1">
                    <input type="checkbox" 
                        class="form-check-input" 
                        name="display"
                        <?php if(isset($record->display)): ?>
                            <?php if($record->display == 1): ?>
                                checked
                            <?php endif; ?>
                        <?php endif; ?>
                    >
                </div>
            </div>
            <!-- Display end-->
    
            <!-- Description -->
            <div class="row mt-3">
                <div class="col-md-1">Descript</div>
                <div class="col-md-7">
                    <textarea class="form-control" name ="description" rows="4">
                    <?php echo e(isset($record->description) ? trim($record->description) : ''); ?>

                    </textarea>
                </div>
            </div>
            <!-- Description end -->

            <!-- Created & updated -->
            <?php if(isset($record)): ?>
            <div class="row mt-3">
                <div class="col-md-1">Created</div>
                <div class="col-md-4">
                    <input type="datetime-local" 
                        value="<?php echo e(isset($record->created_at) ? date('Y-m-d\TH:i:s', strtotime($record->created_at)) : ''); ?>" 
                        name="created_at" 
                        class="form-control" 
                        required
                    >
                </div>
                <div class="col-md-1 ml-2">Updated</div>
                <div class="col-md-4">
                    <input type="datetime-local" value="<?php echo e(isset($record->updated_at) ? date('Y-m-d\TH:i:s', strtotime($record->updated_at)) : ''); ?>" name="updated_at" class="form-control" disabled>
                </div>
            </div>
            <?php endif; ?>
            <!-- Created & updated end -->
              
            <!-- Button -->
            <div class="row mt-3">
                <div class="col-md-9"></div>
                <div class="col-md-1">
                    <a type="button" href="<?php echo e(route('categories.index')); ?>" class="btn ml-3 btn_create_update">Cancel</a>
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

<?php echo $__env->make("layouts.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\course_laravel\resources\views/backend/category_create_update.blade.php ENDPATH**/ ?>