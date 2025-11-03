@extends('layouts.admin-header')

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-xl-12 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <h5 class="mb-3 fw-semibold">Add Service Provider Billing</h5>

                        <div class="card-content mt-4">
                            <form action="{{ route('billing.store') }}" method="POST">
                                @csrf

                                <div class="row">
                                    <!-- Service Provider -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-semibold">Service Provider <span class="text-danger">*</span></label>
                                        <select class="form-control" name="service_provider_id" id="service_provider" required>
                                            <option value="">-- Select Service Provider --</option>
                                            @foreach($providers as $provider)
                                                <option value="{{ $provider->id }}"
                                                        data-state="{{ $provider->com_state }}"
                                                    {{ old('service_provider_id') == $provider->id ? 'selected' : '' }}>
                                                    {{ $provider->name_of_client }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('service_provider_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Invoice Frequency -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-semibold">Invoice Frequency <span class="text-danger">*</span></label>
                                        <select class="form-control" name="invoice_frequency_id" id="invoice_frequency" required>
                                            <option value="">-- Select Frequency --</option>
                                            @foreach($invoiceFrequency as $freq)
                                                <option value="{{ $freq->id }}"
                                                        data-base-charge="{{ $freq->base_charge }}"
                                                    {{ old('invoice_frequency_id') == $freq->id ? 'selected' : '' }}>
                                                    {{ ucfirst($freq->frequency) }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('invoice_frequency_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- State -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-semibold">State</label>
                                        <input type="text" class="form-control" name="state" id="state"
                                               value="{{ old('state') }}" readonly>
                                        @error('state')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Base Charge -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-semibold">Base Charge <span class="text-danger">*</span></label>
                                        <input type="number" step="0.01" class="form-control" name="base_charge" id="base_charge"
                                               value="{{ old('base_charge') }}" required>
                                        @error('base_charge')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Fees 1 -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-semibold">Fees 1</label>
                                        <input type="number" step="0.01" class="form-control" name="fees_1"
                                               value="{{ old('fees_1') }}" placeholder="Enter Fees 1">
                                        @error('fees_1')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Fees 2 -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-semibold">Fees 2</label>
                                        <input type="number" step="0.01" class="form-control" name="fees_2"
                                               value="{{ old('fees_2') }}" placeholder="Enter Fees 2">
                                        @error('fees_2')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Fees 3 -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-semibold">Fees 3</label>
                                        <input type="number" step="0.01" class="form-control" name="fees_3"
                                               value="{{ old('fees_3') }}" placeholder="Enter Fees 3">
                                        @error('fees_3')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
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
                                            <input type="number" step="0.01" class="form-control" name="ope" id="ope" value="{{ old('ope') }}" placeholder="0.00">
                                            @error('ope')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
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
@endsection
