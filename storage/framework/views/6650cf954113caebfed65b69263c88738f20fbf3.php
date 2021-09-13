

<?php $__env->startSection('title'); ?>
Register
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_logo'); ?>
<i class="fas fa-user-plus"></i>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="panel-body text-center body">
  <form method="post" action="<?php echo e(route('register')); ?>">
    <?php echo csrf_field(); ?>
    <!-- Name -->
    <div class="row" style="margin-top:5px;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <input type="text" name="name" class="form-control text" placeholder="User Name" required value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>
        </div>
    </div>
    <?php if($errors->has('name')): ?>
        <div class="row">
            <div class="col-12">
               <p class="text-danger"><?php echo e($errors->first('name')); ?></p>
            </div>
        </div>
    <?php endif; ?>

    <!-- Email -->
    <div class="row" style="margin-top:15px;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <input type="email" name="email" class="form-control text" placeholder="Email" required autocomplete="email" autofocus>
        </div>
    </div>
    <?php if($errors->has('email')): ?>
        <div class="row">
            <div class="col-12">
               <p class="text-danger"><?php echo e($errors->first('email')); ?></p>
            </div>
        </div>
    <?php endif; ?>

    <!-- Password -->
    <div class="row" style="margin-top:15px;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <input type="password" name="password" class="form-control text"  placeholder="Password" required autocomplete="new-password">
        </div>
    </div>
    <?php if($errors->has('password')): ?>
        <div class="row">
            <div class="col-12">
                <p class="text-danger"><?php echo e($errors->first('password')); ?></p>
            </div>
        </div>
    <?php endif; ?>

    <!-- Password_confirmation -->
    <div class="row" style="margin-top:15px;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <input type="password" name="password_confirmation" class="form-control text"  placeholder="Password Confirm" required autocomplete="new-password">
        </div>
    </div>
    <?php if($errors->has('password_confirmation')): ?>
        <div class="row">
            <div class="col-12">
                 <p class="text-danger"><?php echo e($errors->first('password_confirmation')); ?></p>
            </div>
        </div>
    <?php endif; ?>

    <!-- Phone -->
    <div class="row" style="margin-top:15px;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <input type="text" name="phone" class="form-control text"  placeholder="Phone Number" required autocomplete="current-phone">
        </div>
    </div>
    <?php if($errors->has('phone')): ?>
        <div class="row">
            <div class="col-12">
                 <p class="text-danger"><?php echo e($errors->first('phone')); ?></p>
            </div>
        </div>
    <?php endif; ?>

    <!-- Address -->
    <div class="row" style="margin-top:15px;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <input type="text" name="address" class="form-control text"  placeholder="Address" required autocomplete="current-address">
        </div>
    </div>
    <?php if($errors->has('address')): ?>
        <div class="row">
            <div class="col-12">
                 <p class="text-danger"><?php echo e($errors->first('address')); ?></p>
            </div>
        </div>    
    <?php endif; ?>

    <div class="row" style="margin-top:50px;">
        <div class="col-md-12">
            <input type="submit" value="Register" class="btn btn_login"> 
        </div>
    </div>
  </form>
</div>
<div class="panel-footer text-center">
    <div class="row">
        <i class="fab fa-facebook" style="color:#4267B2;"></i>
         &emsp;
        <i class="fab fa-google" style="color:#DB4437;"></i>
        &emsp;
        <i class="fab fa-twitter" style="color:#1DA1F2;"></i>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make("auth.layout_auth", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\course_laravel\resources\views/auth/register.blade.php ENDPATH**/ ?>