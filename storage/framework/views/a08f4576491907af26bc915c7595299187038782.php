

<?php $__env->startSection('content'); ?>
<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-xl-12 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="custom-align">
                            <h5 class="mb-1">List Service Providers</h5>
                            <button class="btn btn-xs btn-primary ml-auto"
                                    onclick="window.location.href='<?php echo e(route('admin.view_add_service_provider')); ?>'">
                                Add
                            </button>
                        </div>

                        <div class="table-responsive mt-4">
                            <table class="table align-middle mb-0 table-hover" id="ServiceProvider-History">
                                <thead class="table-light">
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Service Provider</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sr_no = 1; ?>

                                    <?php if(!empty($providers)): ?>
                                        <?php $__currentLoopData = $providers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($sr_no++); ?></td>
                                                <td><?php echo e($provider->name ?? $provider->company_name); ?></td>
                                                <td><?php echo e(\Carbon\Carbon::parse($provider->created_at)->format('d M Y')); ?></td>
                                                <td>
                                                    <!-- View Button -->
                                                    <a href="<?php echo e(route('admin.billing.edit', $provider->id)); ?>"
                                                       class="btn btn-xs btn-info" title="View">
                                                        <i class="bx bx-show"></i>
                                                    </a>

                                                    <!-- Generate Button (e.g., PDF, Report, etc.) -->
                                                    <a href="<?php echo e(route('admin.billing.save', $provider->id)); ?>"
                                                       class="btn btn-xs btn-success" title="Generate"
                                                       target="_blank">
                                                        <i class="bx bx-file"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="4" class="text-danger text-center">List Is Empty!</td>
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
    .custom-align {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .custom-align h5 { margin: 0; }
    .custom-align button { margin-left: auto; }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\facilon_coin\resources\views/admin/billing/index.blade.php ENDPATH**/ ?>