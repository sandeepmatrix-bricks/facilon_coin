<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ServiceProviderBilling;

class BillingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers = DB::table('service_provider_billings as b')
            ->leftJoin('service_providers_scheduling as s', 'b.service_provider_id', '=', 's.id')
            ->leftJoin('invoice_frequencies as f', 'b.invoice_frequency_id', '=', 'f.id')
            ->select(
                'b.id',
                's.name_of_client as provider_name',
                'f.frequency as invoice_frequency_name',
                'b.base_charge'
            )
            ->get();

        return view('admin.billing.index', compact('providers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $providers = DB::table('service_providers_scheduling')->select('id', 'name_of_client', 'com_state')->get();
        $invoiceFrequency = DB::table('invoice_frequencies')->select('id', 'frequency','base_charge')->get();

        return view('admin.billing.create', compact('providers', 'invoiceFrequency'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $validated = $request->validate([
        'service_provider_id' => 'required|integer',
        'invoice_frequency_id' => 'required|integer',
        'state' => 'nullable|string|max:255',
        'base_charge' => 'required|numeric',
        'fees_1' => 'nullable|numeric',
        'fees_2' => 'nullable|numeric',
        'fees_3' => 'nullable|numeric',
        'cgst' => 'nullable|numeric',
        'sgst' => 'nullable|numeric',
        'igst' => 'nullable|numeric',
        'ope' => 'nullable|numeric',
        'total_gst' => 'nullable|numeric',
        'total_amount' => 'nullable|numeric',
        ]);

        // Add created_by (assuming Auth user)
        $validated['created_by'] = auth()->id() ?? 1;

        // Store the record
       ServiceProviderBilling::create($validated);

        // Redirect or return response
        return redirect()->route('billing.index')->with('success', 'Billing record added successfully!');
    }

    public function previewModal($id)
    {
        $billing = DB::table('service_provider_billings as b')
            ->leftJoin('service_providers_scheduling as s', 'b.service_provider_id', '=', 's.id')
            ->leftJoin('invoice_frequencies as f', 'b.invoice_frequency_id', '=', 'f.id')
            ->select(
                'b.*',
                's.name_of_client',
                's.company_director_name',
                's.company_director_din',
                's.pan_no',
                's.gst_no',
                's.contact_person_name',
                's.contact_person_email',
                's.contact_person_phone',
                'f.frequency as frequency_name'
            )
            ->where('b.id', $id)
            ->first();

        if (!$billing) {
            return response()->json(['status' => false, 'message' => 'Record not found']);
        }

        $html = view('admin.billing.preview', compact('billing'))->render();
        return response()->json(['status' => true, 'html' => $html]);
    }

    public function approvalList()
    {
        $billings = DB::table('service_provider_billings as b')
            ->leftJoin('service_providers_scheduling as s', 'b.service_provider_id', '=', 's.id')
            ->leftJoin('invoice_frequencies as f', 'b.invoice_frequency_id', '=', 'f.id')
            ->select('b.*', 's.name_of_client', 'f.frequency as frequency_name')
            ->where('b.approval_status', 'pending')
            ->get();

        return view('admin.billing.approval_list', compact('billings'));
    }

    public function updateApproval(Request $request, $id)
    {
        $request->validate(['approval_status' => 'required|in:approved,rejected']);

        DB::table('service_provider_billings')
            ->where('id', $id)
            ->update([
                'approval_status' => $request->approval_status,
                'approved_by' => auth()->id(),
                'approved_at' => now(),
            ]);

        return redirect()->route('billing.approval.list')->with('success', 'Approval status updated.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
