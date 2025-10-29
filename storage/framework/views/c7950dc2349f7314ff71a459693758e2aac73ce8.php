<?php $__env->startSection('content'); ?>
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-xl-12 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div class="custom-align">
                                <h5 class="mb-1">List Service Providers</h5>
                                <button class="btn btn-xs btn-primary ml-auto" onclick="window.location.href = '<?php echo e(route('admin.view_add_service_provider')); ?>'">Add</button>
                            </div>
                            <div class="table-responsive mt-4">
                                <table class="table align-middle mb-0 table-hover" id="Transaction-History">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Sr. No.</th>
                                            
                                            <th>Title</th>
                                            
                                            <th>Agreement status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sr_no = 1;    
                                        ?>
                                        
                                        <?php if(count($fetch_all_scheduling) > 0): ?>
                                            <?php $__currentLoopData = $fetch_all_scheduling; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list_service_providers_ind): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($sr_no++); ?></td>
                                                    
                                                    <td><?php echo e($list_service_providers_ind->name_of_client); ?></td>
                                                    
                                                    <td><?php echo e($list_service_providers_ind->agreement_status); ?></td>
                                                    <td>
                                                        <a href="<?php echo e(route('admin.view_update_service_provider_scheduling')); ?>/<?php echo e($list_service_providers_ind->id); ?>" class="btn btn-xs btn-warning" title="Edit"><i class="bx bx-pencil" aria-hidden="true"></i></a>

                                                        <a href="javascript:void(0)" class="btn btn-xs btn-danger" title="Delete" onclick="confirm_delete(<?php echo e($list_service_providers_ind->id); ?>)"><i class="bx bx-trash" aria-hidden="true"></i></a>

                                                        <script>
                                                            function confirm_delete(id) 
                                                            {
                                                                var confirmation = confirm("Are you sure you want to delete this service provider?");
                                                                
                                                                if(confirmation)
                                                                {
                                                                    window.location.href = "<?php echo e(route('admin.delete_service_provider')); ?>/"+id;
                                                                }
                                                            }
                                                        </script>

                                                        <?php if($list_service_providers_ind->status == 1): ?>
                                                            <a href="<?php echo e(route('admin.deactivate_service_provider')); ?>/<?php echo e($list_service_providers_ind->id); ?>" class="btn btn-xs btn-danger" title="Deactivate Service Provider"><i class="bx bx-dislike" aria-hidden="true"></i></a>
                                                        <?php else: ?>
                                                            <a href="<?php echo e(route('admin.assign_and_approve_service_provider')); ?>/<?php echo e($list_service_providers_ind->id); ?>" class="btn btn-xs btn-success" title="Activate Service Provider"><i class="bx bx-like" aria-hidden="true"></i></a>
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
				

<?php echo $__env->make('layouts.admin-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\facilon_coin\resources\views/admin/service-providers/all-scheduling.blade.php ENDPATH**/ ?>