

<?php $__env->startSection("do-du-lieu"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/assets/css/user.css')); ?>">
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Users manager</strong>
        </div>
        <div class="table-stats order-table ov-h">
            <table class="table ">
                <thead>
                    <tr>
                       	<th style="width: 50px;" class="serial" > 
                            <button class="btn dropdown-toggle btn_arrange" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Id
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <p class="dropdown-item" id="arrange_id_asc">asc</p>
                                <a class="dropdown-item" id="arrange_id_desc">desc</a>
                            </div>
                        </th>
                        <th class="avatar">Avatar</th>
                        <th style="width: 180px;">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle btn_arrange" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Name
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <p class="dropdown-item" id="arrange_name_asc">A-Z</p>
                                <p class="dropdown-item" id="arrange_name_desc">Z-A</p>
                            </div>
                        </div>
                        </th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th style="width:120px;"></th>
                    </tr>
                </thead>
                <tbody id="test">
                    
                </tbody>
            </table>
        </div> 
    </div>
    <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
    <?php echo e($data->links()); ?>


    </ul>
    </nav>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\course_laravel\resources\views/backend/user_read.blade.php ENDPATH**/ ?>