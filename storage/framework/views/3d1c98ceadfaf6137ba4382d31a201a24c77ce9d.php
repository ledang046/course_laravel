<!DOCTYPE html>
<html>
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/assets/css/auth_bootstrap.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/assets/css/login_register.css')); ?>">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<div class="container" style="margin-top:80px;">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel" style="border:1px solid darkgray;border-radius:0;">
            <div class="panel-heading text-center" >
               <h1 class="title_login">
                  <?php echo $__env->yieldContent('title_logo'); ?>
                </h1>
            </div>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
      </div>    
    </div>
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\course_laravel\resources\views/auth/layout_auth.blade.php ENDPATH**/ ?>