<?php $__env->startSection('content'); ?>
<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-xl-12 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <h5 class="mb-3 fw-semibold">Add Service Provider Billing</h5>

                        <div class="card-content mt-4">
                            <form action="<?php echo e(route('billing.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>

                                <div class="row">
                                    <!-- Service Provider -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-semibold">Service Provider <span class="text-danger">*</span></label>
                                        <select class="form-control" name="service_provider_id" id="service_provider" required>
                                            <option value="">-- Select Service Provider --</option>
                                            <?php $__currentLoopData = $providers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($provider->id); ?>"
                                                        data-state="<?php echo e($provider->com_state); ?>"
                                                    <?php echo e(old('service_provider_id') == $provider->id ? 'selected' : ''); ?>>
                                                    <?php echo e($provider->name_of_client); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php $__errorArgs = ['service_provider_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <!-- Invoice Frequency -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-semibold">Invoice Frequency <span class="text-danger">*</span></label>
                                        <select class="form-control" name="invoice_frequency_id" id="invoice_frequency" required>
                                            <option value="">-- Select Frequency --</option>
                                            <?php $__currentLoopData = $invoiceFrequency; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $freq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($freq->id); ?>"
                                                        data-base-charge="<?php echo e($freq->base_charge); ?>"
                                                    <?php echo e(old('invoice_frequency_id') == $freq->id ? 'selected' : ''); ?>>
                                                    <?php echo e(ucfirst($freq->frequency)); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php $__errorArgs = ['invoice_frequency_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <!-- State -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-semibold">State</label>
                                        <input type="text" class="form-control" name="state" id="state"
                                               value="<?php echo e(old('state')); ?>" readonly>
                                        <?php $__errorArgs = ['state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <!-- Base Charge -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-semibold">Base Charge <span class="text-danger">*</span></label>
                                        <input type="number" step="0.01" class="form-control" name="base_charge" id="base_charge"
                                               value="<?php echo e(old('base_charge')); ?>" required>
                                        <?php $__errorArgs = ['base_charge'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <!-- Fees 1 -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-semibold">Fees 1</label>
                                        <input type="number" step="0.01" class="form-control" name="fees_1"
                                               value="<?php echo e(old('fees_1')); ?>" placeholder="Enter Fees 1">
                                        <?php $__errorArgs = ['fees_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <!-- Fees 2 -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-semibold">Fees 2</label>
                                        <input type="number" step="0.01" class="form-control" name="fees_2"
                                               value="<?php echo e(old('fees_2')); ?>" placeholder="Enter Fees 2">
                                        <?php $__errorArgs = ['fees_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <!-- Fees 3 -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-semibold">Fees 3</label>
                                        <input type="number" step="0.01" class="form-control" name="fees_3"
                                               value="<?php echo e(old('fees_3')); ?>" placeholder="Enter Fees 3">
                                        <?php $__errorArgs = ['fees_3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <!-- GST & OPE Section -->
                                    <div id="gst-section" style="display:none; width:100%; margin-top:15px;">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label fw-semibold">CGST (%)</label>
                                            <input type="number" step="0.01" class="form-control" name="cgst" id="cgst" readonly>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label class="form-label fw-semibold">SGST (%)</label>
                                            <input type="number" step="0.01" class="form-control" name="sgst" id="sgst" readonly>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label class="form-label fw-semibold">IGST (%)</label>
                                            <input type="number" step="0.01" class="form-control" name="igst" id="igst" readonly>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label fw-semibold">OPE (Other Payable Expenses)</label>
                                            <input type="number" step="0.01" class="form-control" name="ope" id="ope" value="<?php echo e(old('ope')); ?>" placeholder="0.00">
                                            <?php $__errorArgs = ['ope'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <small class="text-danger"><?php echo e($message); ?></small>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label fw-semibold">Total GST Amount</label>
                                            <input type="number" step="0.01" class="form-control" name="total_gst" id="total_gst" readonly>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label fw-semibold">Total Amount (Base + Fees + GST + OPE)</label>
                                            <input type="number" step="0.01" class="form-control" name="total_amount" id="total_amount" readonly>
                                        </div>
                                    </div>
                                </div>

                                <!-- Action Buttons -->
                                <div class="row mt-4">
                                    <div class="col-md-12 text-center">
                                        <button type="button" class="btn btn-secondary btn-sm px-4 me-3" id="calculateBtn">
                                            Calculate
                                        </button>
                                        <button type="submit" class="btn btn-primary btn-sm px-4">
                                            Submit
                                        </button>
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

<script>
document.addEventListener('DOMContentLoaded', function () {
    const providerSelect = document.getElementById('service_provider');
    const stateInput = document.getElementById('state');
    const invoiceFrequency = document.getElementById('invoice_frequency');
    const baseCharge = document.getElementById('base_charge');
    const fees1 = document.getElementsByName('fees_1')[0];
    const fees2 = document.getElementsByName('fees_2')[0];
    const fees3 = document.getElementsByName('fees_3')[0];
    const ope = document.getElementById('ope');

    const gstSection = document.getElementById('gst-section');
    const cgst = document.getElementById('cgst');
    const sgst = document.getElementById('sgst');
    const igst = document.getElementById('igst');
    const totalGst = document.getElementById('total_gst');
    const totalAmount = document.getElementById('total_amount');

    const calculateBtn = document.getElementById('calculateBtn');
    const companyState = "Maharashtra";

    // Auto-fill Base Charge
    invoiceFrequency.addEventListener('change', function () {
        const option = this.selectedOptions[0];
        baseCharge.value = option ? option.getAttribute('data-base-charge') || '' : '';
    });

    // Auto-fill State on Provider Change
    providerSelect.addEventListener('change', function () {
        const option = providerSelect.selectedOptions[0];
        stateInput.value = option ? option.getAttribute('data-state') || '' : '';
    });

    // GST Calculation function
    function calculateGST() {
        const base = parseFloat(baseCharge.value) || 0;
        const f1 = parseFloat(fees1.value) || 0;
        const f2 = parseFloat(fees2.value) || 0;
        const f3 = parseFloat(fees3.value) || 0;
        const opeVal = parseFloat(ope.value) || 0;

        const subtotal = base + f1 + f2 + f3;
        const providerState = stateInput.value.trim();

        let cgstVal = 0, sgstVal = 0, igstVal = 0;

        if (providerState.toLowerCase() === companyState.toLowerCase()) {
            cgstVal = 9;
            sgstVal = 9;
            igstVal = 0;
        } else {
            cgstVal = 0;
            sgstVal = 0;
            igstVal = 18;
        }

        cgst.value = cgstVal;
        sgst.value = sgstVal;
        igst.value = igstVal;

        const gstAmount = subtotal * ((cgstVal + sgstVal + igstVal)/100);
        totalGst.value = gstAmount.toFixed(2);
        totalAmount.value = (subtotal + gstAmount + opeVal).toFixed(2);
    }

    // Calculate on button click
    calculateBtn.addEventListener('click', function () {
        calculateGST();
        gstSection.style.display = "flex";
        gstSection.style.flexWrap = "wrap";
    });

    // Recalculate on OPE focusout
    ope.addEventListener('input', function () {
        calculateGST();
    });
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\facilon_coin\resources\views/admin/billing/create.blade.php ENDPATH**/ ?>