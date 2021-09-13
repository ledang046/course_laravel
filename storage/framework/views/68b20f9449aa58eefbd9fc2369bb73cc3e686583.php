

<?php $__env->startSection('title'); ?>
Forgot password
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_logo'); ?>
Forgot Password
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="panel-body text-center body">
<form method="POST" action="<?php echo e(route('password.email')); ?>">
    <?php echo csrf_field(); ?>

    <div class="row" style="margin-top:5px;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> text" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="Enter your email">
        </div>
    </div>

    <div class="row" style="margin-top:50px;">
        <div class="col-md-12">
            <input type="submit" class="btn btn_login" value="Send Password Reset Link">
        </div>
    </div>

    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div class="row" style="margin-top:20px;">
      <div class="alert alert-danger">
         <strong><?php echo e($message); ?></strong>
      </div>
    </div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <?php if(session('status')): ?>
    <div class="row" style="margin-top:20px;">
      <div class="alert alert-success" role="alert">
         <strong><?php echo e(session('status')); ?></strong>
      </div>
    </div>
    <?php endif; ?>
</form>
</div>
               
<?php $__env->stopSection(); ?>


<?php echo $__env->make("auth.layout_auth", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\course_laravel\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>