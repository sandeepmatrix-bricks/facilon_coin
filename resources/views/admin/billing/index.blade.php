@extends('layouts.admin-header')

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-xl-12 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="custom-align">
                            <h5 class="mb-1">List Service Providers</h5>
                            <button class="btn btn-xs btn-primary ml-auto"
                                    onclick="window.location.href='{{ route('billing.create') }}'">
                                Add
                            </button>
                        </div>

                        <div class="table-responsive mt-4">
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
                                                @php $sr_no = 1; @endphp

                                    @if(!empty($providers) && count($providers))
                                        @foreach($providers as $provider)
                                            <tr>
                                                <td>{{ $sr_no++ }}</td>
                                                <td>{{ $provider->provider_name ?? 'NA'}}</td>
                                                <td>{{ $provider->invoice_frequency_name ?? 'NA'}}</td>
                                                <td>₹ {{ number_format($provider->base_charge ?? 0, 2) }}</td>
                                                <td>
                                                    <!-- Preview Button -->
                                                    <a href="javascript:void(0);"
                                                       class="btn btn-xs btn-info preview-btn"
                                                       data-id="{{ $provider->id }}"
                                                       title="Preview">
                                                       <i class="bx bx-show"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" class="text-danger text-center">List Is Empty!</td>
                                        </tr>
                                    @endif
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
@endsection
