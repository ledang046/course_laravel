

<?php $__env->startSection("do-du-lieu"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/assets/css/product.css')); ?>">
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10">
                    <strong class="card-title" >Course manager</strong>
                </div>
                <div class="col-md-2 text-right">
                    <a class="btn-add py-1 px-3" href="<?php echo e(route('products.create')); ?>">
                        <i class="fas fa-plus"></i> Create
                    </a>
                </div>
            </div>
        </div>
        <div class="table-stats order-table ov-h">
            <table class="table ">
                <thead>
                    <tr>
                       	<th>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle btn_arrange" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Id
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item" href="<?php echo e(url('admin/arrangecategory/id/asc')); ?>">Asc</a>
                                    <a class="dropdown-item" href="<?php echo e(url('admin/arrangecategory/id/desc')); ?>">Desc</a>
                                </div>
                            </div>
                        </th>
                        <th>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle btn_arrange" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Name
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <a class="dropdown-item" href="<?php echo e(url('admin/arrangecategory/name/asc')); ?>">A-Z</a>
                                    <a class="dropdown-item" href="<?php echo e(url('admin/arrangecategory/name/desc')); ?>">Z-A</a>
                                </div>
                            </div>
                        </th>
                        <th>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle btn_arrange" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Display
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <a class="dropdown-item" href="<?php echo e(url('admin/arrangecategory/display/desc')); ?>">Display</a>
                                    <a class="dropdown-item" href="<?php echo e(url('admin/arrangecategory/display/asc')); ?>">Undisplayed</a>
                                </div>
                            </div>
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($rows->id); ?></td>
                        <td><?php echo e($rows->name); ?></td>
                        <td>
                            <?php if($rows->display == 1): ?>
                                <i class="fas fa-check ml-3" style="color:green"></i>
                            <?php else: ?>
                                <i class="fas fa-times ml-3" style="color:red"></i>
                            <?php endif; ?>
                        </td>
                        <td>
                            <form style="display: inline;" action="<?php echo e(url('admin/products/'.$rows->id)); ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete?');" >
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <a class="badge badge-complete" style="color:white;" href="<?php echo e(url('admin/users/'.$rows->id.'/edit')); ?>"><i class="fas fa-pencil-alt"></i></a>
                                <button style="background-color:gray;border:none;cursor:pointer;" class="badge badge-complete" type="submit"><i class="fas fa-trash-alt"></i>
                                </button>
                            </form>  
                        </td>
                    </tr> 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div> 
    </div>
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
        </li>
      </ul>
    </nav>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('add-ajax'); ?>
<script type="text/javascript" language="javascript">
    
</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make("layouts.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\course_laravel\resources\views/backend/product_read.blade.php ENDPATH**/ ?>