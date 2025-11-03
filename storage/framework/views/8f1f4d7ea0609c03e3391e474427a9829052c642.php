

<?php $__env->startSection('content'); ?>
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-xl-12 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div>
                                <h5 class="mb-1">Add Service Provider</h5>
                            </div>
                            <div class="card-content mt-4">
                                <form action="<?php echo e(route('admin.add_service_provider')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Title <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="title" placeholder="Enter Title">

                                                    <?php if($errors->has('title')): ?>
                                                        <span class="text-danger"><?php echo e($errors->first('title')); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Image <span class="text-danger"> *</span></label>
                                                    <input type="file" class="form-control" name="img_src" accept="image/*">

                                                    <?php if($errors->has('img_src')): ?>
                                                        <span class="text-danger"><?php echo e($errors->first('img_src')); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <button type="submit" name="submit" class="btn btn-primary btn-sm waves-effect waves-light">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\facilon_coin\resources\views/admin/service-providers/add-service-provider.blade.php ENDPATH**/ ?>