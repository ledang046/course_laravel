<!-- form-error.blade.php -->
<?php if($errors->any()): ?>
    <section class="error">
        <div class="container mt-5">
            <div class="columns is-centered">
                <div class="column is-6">
                    <div class="alert alert-danger">
                        <ul style="margin-left: 15px;">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\course_laravel\resources\views/backend/form-error.blade.php ENDPATH**/ ?>