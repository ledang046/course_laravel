

<?php $__env->startSection('title'); ?>
  Login
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_logo'); ?>
<i class="fas fa-user"></i>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="panel-body text-center body">
  <form method="post" action="<?php echo e(route('login')); ?>">
    <?php echo csrf_field(); ?>
    <!-- Email -->
    <div class="row" style="margin-top:5px;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <input type="email" name="email" class="form-control text" placeholder="Email" required autocomplete="email" autofocus>
        </div>
    </div>

    <!-- Password -->
    <div class="row" style="margin-top:15px;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <input type="password" name="password" class="form-control text"  placeholder="Password" required autocomplete="current-password">
        </div>
    </div>


    <div class="row" style="margin-top:10px;margin-bottom:30px;">
        <div class="col-md-5">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                <label class="form-check-label" for="remember">
                    <?php echo e(__('Remember Me')); ?>

                </label>
            </div>
        </div>
        <div class="col-md-7">
          <a class="forgot_pass" href="<?php echo e(route('password.request')); ?>">Forgot Password?</a>
        </div>
    </div>

    <?php if($errors->any()): ?>
        <div class="row">
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>

    <div class="row" style="margin-top:50px;">
        <div class="col-md-12">
            <input type="submit" value="Login" class="btn btn_login"> 
        </div>
    </div>
  </form>
</div>
<div class="panel-footer text-center">
    <div class="row ">
        <p class="link_signup">Don't have account? <a href="<?php echo e(route('register')); ?>">Signup Now</a></p>
    </div>
    <div class="row">
        <i class="fab fa-facebook" style="color:#4267B2;"></i>
         &emsp;
        <i class="fab fa-google" style="color:#DB4437;"></i>
        &emsp;
        <i class="fab fa-twitter" style="color:#1DA1F2;"></i>
    </div>
</div>
<?php $__env->stopSection(); ?>
   
<?php echo $__env->make("auth.layout_auth", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\course_laravel\resources\views/auth/login.blade.php ENDPATH**/ ?>