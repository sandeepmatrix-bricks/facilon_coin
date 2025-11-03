

<?php $__env->startSection('content'); ?>
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-xl-12 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div class="custom-align">
<<<<<<<< HEAD:storage/framework/views/0dea3e55c42725f9eb35a2bf0b9c1a7ebf91b5e5.php
                                <h5 class="mb-1">List Key Points</h5>
                                <button class="btn btn-xs btn-primary ml-auto" onclick="window.location.href = '<?php echo e(route('admin.view_add_key_point')); ?>'">Add</button>
========
                                <h5 class="mb-1">List Custody Services</h5>
                                <button class="btn btn-xs btn-primary ml-auto" onclick="window.location.href = '<?php echo e(route('admin.view_add_custody_service')); ?>'">Add</button>
>>>>>>>> 42091b5b7535d3a17f3e61b682fe3c49f982fd3d:storage/framework/views/70fece9ca9e75eacb8ad0c8c2212841ebd84e599.php
                            </div>
                            <div class="table-responsive mt-4">
                                <table class="table align-middle mb-0 table-hover" id="Transaction-History">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sr_no = 1;    
                                        ?>
                                        
<<<<<<<< HEAD:storage/framework/views/0dea3e55c42725f9eb35a2bf0b9c1a7ebf91b5e5.php
                                        <?php if(count($list_key_points) > 0): ?>
                                            <?php $__currentLoopData = $list_key_points; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list_key_points_ind): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($sr_no++); ?></td>
                                                    <td><img src="<?php echo e(asset('public/admin/assets/images/key-points/'.$list_key_points_ind->img_src)); ?>" style="width: 100px; height:100px;"></td>
                                                    <td><?php echo e($list_key_points_ind->title); ?></td>
                                                    <td><?php echo e(date('d M Y', strtotime($list_key_points_ind->created_at))); ?></td>
                                                    <td>
                                                        <a href="<?php echo e(route('admin.view_key_point_details')); ?>/<?php echo e($list_key_points_ind->id); ?>" class="btn btn-xs btn-warning" title="Edit"><i class="bx bx-pencil" aria-hidden="true"></i></a>

                                                        <a href="javascript:void(0)" class="btn btn-xs btn-danger" title="Delete" onclick="confirm_delete(<?php echo e($list_key_points_ind->id); ?>)"><i class="bx bx-trash" aria-hidden="true"></i></a>
========
                                        <?php if(count($list_custody_services) > 0): ?>
                                            <?php $__currentLoopData = $list_custody_services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list_custody_services_ind): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($sr_no++); ?></td>
                                                    <td><img src="<?php echo e(asset('public/admin/assets/images/custody/services/'.$list_custody_services_ind->img_src)); ?>" style="width: 100px; height:100px;"></td>
                                                    <td><?php echo e($list_custody_services_ind->title); ?></td>
                                                    <td><?php echo e(date('d M Y', strtotime($list_custody_services_ind->created_at))); ?></td>
                                                    <td>
                                                        <a href="<?php echo e(route('admin.view_custody_service_details')); ?>/<?php echo e($list_custody_services_ind->id); ?>" class="btn btn-xs btn-warning" title="Edit"><i class="bx bx-pencil" aria-hidden="true"></i></a>

                                                        <a href="javascript:void(0)" class="btn btn-xs btn-danger" title="Delete" onclick="confirm_delete(<?php echo e($list_custody_services_ind->id); ?>)"><i class="bx bx-trash" aria-hidden="true"></i></a>
>>>>>>>> 42091b5b7535d3a17f3e61b682fe3c49f982fd3d:storage/framework/views/70fece9ca9e75eacb8ad0c8c2212841ebd84e599.php

                                                        <script>
                                                            function confirm_delete(id) 
                                                            {
<<<<<<<< HEAD:storage/framework/views/0dea3e55c42725f9eb35a2bf0b9c1a7ebf91b5e5.php
                                                                var confirmation = confirm("Are you sure you want to delete this key point?");
                                                                
                                                                if(confirmation)
                                                                {
                                                                    window.location.href = "<?php echo e(route('admin.delete_key_point')); ?>/"+id;
========
                                                                var confirmation = confirm("Are you sure you want to delete this service?");
                                                                
                                                                if(confirmation)
                                                                {
                                                                    window.location.href = "<?php echo e(route('admin.delete_custody_service')); ?>/"+id;
>>>>>>>> 42091b5b7535d3a17f3e61b682fe3c49f982fd3d:storage/framework/views/70fece9ca9e75eacb8ad0c8c2212841ebd84e599.php
                                                                }
                                                            }
                                                        </script>

<<<<<<<< HEAD:storage/framework/views/0dea3e55c42725f9eb35a2bf0b9c1a7ebf91b5e5.php
                                                        <?php if($list_key_points_ind->status == 1): ?>
                                                            <a href="<?php echo e(route('admin.deactivate_key_point')); ?>/<?php echo e($list_key_points_ind->id); ?>" class="btn btn-xs btn-danger" title="Deactivate"><i class="bx bx-dislike" aria-hidden="true"></i></a>
                                                        <?php else: ?>
                                                            <a href="<?php echo e(route('admin.activate_key_point')); ?>/<?php echo e($list_key_points_ind->id); ?>" class="btn btn-xs btn-success" title="Activate"><i class="bx bx-like" aria-hidden="true"></i></a>
========
                                                        <?php if($list_custody_services_ind->status == 1): ?>
                                                            <a href="<?php echo e(route('admin.deactivate_custody_service')); ?>/<?php echo e($list_custody_services_ind->id); ?>" class="btn btn-xs btn-danger" title="Deactivate Service"><i class="bx bx-dislike" aria-hidden="true"></i></a>
                                                        <?php else: ?>
                                                            <a href="<?php echo e(route('admin.activate_custody_service')); ?>/<?php echo e($list_custody_services_ind->id); ?>" class="btn btn-xs btn-success" title="Activate Service"><i class="bx bx-like" aria-hidden="true"></i></a>
>>>>>>>> 42091b5b7535d3a17f3e61b682fe3c49f982fd3d:storage/framework/views/70fece9ca9e75eacb8ad0c8c2212841ebd84e599.php
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>  
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="5" class="text-danger text-center">List Is Empty!</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .custom-align 
        {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .custom-align h5 
        {
            margin: 0;
        }

        .custom-align button 
        {
            margin-left: auto;
        }
    </style>
<?php $__env->stopSection(); ?>
				

<<<<<<<< HEAD:storage/framework/views/0dea3e55c42725f9eb35a2bf0b9c1a7ebf91b5e5.php
<?php echo $__env->make('layouts.admin-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\facilon_coin\resources\views/admin/home/key-points/list-key-points.blade.php ENDPATH**/ ?>
========
<?php echo $__env->make('layouts.admin-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\facilon_coin\resources\views/admin/custody/list-custody-services.blade.php ENDPATH**/ ?>
>>>>>>>> 42091b5b7535d3a17f3e61b682fe3c49f982fd3d:storage/framework/views/70fece9ca9e75eacb8ad0c8c2212841ebd84e599.php
