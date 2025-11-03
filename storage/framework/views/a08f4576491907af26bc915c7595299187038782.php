<<<<<<< HEAD
=======


>>>>>>> 42091b5b7535d3a17f3e61b682fe3c49f982fd3d
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
<<<<<<< HEAD
                                    onclick="window.location.href='<?php echo e(route('billing.create')); ?>'">
=======
                                    onclick="window.location.href='<?php echo e(route('admin.view_add_service_provider')); ?>'">
>>>>>>> 42091b5b7535d3a17f3e61b682fe3c49f982fd3d
                                Add
                            </button>
                        </div>

                        <div class="table-responsive mt-4">
<<<<<<< HEAD
                                <table class="table align-middle mb-0 table-hover" id="Transaction-History">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Service Provider</th>
                                            <th>Frequency</th>
                                            <th>Base Charge (Total)</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                <?php $sr_no = 1; ?>

                                    <?php if(!empty($providers) && count($providers)): ?>
                                        <?php $__currentLoopData = $providers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($sr_no++); ?></td>
                                                <td><?php echo e($provider->provider_name ?? 'NA'); ?></td>
                                                <td><?php echo e($provider->invoice_frequency_name ?? 'NA'); ?></td>
                                                <td>₹ <?php echo e(number_format($provider->base_charge ?? 0, 2)); ?></td>
                                                <td>
                                                    <!-- Preview Button -->
                                                    <a href="javascript:void(0);"
                                                       class="btn btn-xs btn-info preview-btn"
                                                       data-id="<?php echo e($provider->id); ?>"
                                                       title="Preview">
                                                       <i class="bx bx-show"></i>
=======
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
>>>>>>> 42091b5b7535d3a17f3e61b682fe3c49f982fd3d
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <tr>
<<<<<<< HEAD
                                            <td colspan="5" class="text-danger text-center">List Is Empty!</td>
                                        </tr>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                    </div> <!-- .card-body -->
                </div> <!-- .card -->
            </div>
        </div>
    </div>
</div>

<!-- Preview Modal -->
<div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="previewModalLabel">Service Provider Preview</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="previewModalBody">
                <div class="text-center text-muted py-5">Loading...</div>
=======
                                            <td colspan="4" class="text-danger text-center">List Is Empty!</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
>>>>>>> 42091b5b7535d3a17f3e61b682fe3c49f982fd3d
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
<<<<<<< HEAD

<script>
document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".preview-btn").forEach(function(btn) {
        btn.addEventListener("click", function() {
            const id = this.getAttribute("data-id");
            const modalBody = document.getElementById("previewModalBody");
            modalBody.innerHTML = '<div class="text-center text-muted py-5">Loading...</div>';

            fetch(`/billing/preview-modal/${id}`)
                .then(response => {
                    if (!response.ok) throw new Error('Network response was not ok');
                    return response.json();
                })
                .then(data => {
                    if (data.status) {
                        modalBody.innerHTML = data.html;
                    } else {
                        modalBody.innerHTML = '<div class="text-danger text-center py-5">' + (data.message || 'Record not found') + '</div>';
                    }
                    new bootstrap.Modal(document.getElementById('previewModal')).show();
                })
                .catch((err) => {
                    console.error(err);
                    modalBody.innerHTML = '<div class="text-danger text-center py-5">Error loading preview</div>';
                    new bootstrap.Modal(document.getElementById('previewModal')).show();
                });
        });
    });
});
</script>
<?php $__env->stopSection(); ?>

=======
<?php $__env->stopSection(); ?>
>>>>>>> 42091b5b7535d3a17f3e61b682fe3c49f982fd3d
<?php echo $__env->make('layouts.admin-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\facilon_coin\resources\views/admin/billing/index.blade.php ENDPATH**/ ?>