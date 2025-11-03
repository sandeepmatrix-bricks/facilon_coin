<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\InvoiceFrequency;

class ServiceProviderBilling extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'service_provider_id',
        'invoice_frequency_id',
        'state',
        'base_charge',
        'fees_1',
        'fees_2',
        'fees_3',
        'cgst',
        'sgst',
        'igst',
        'ope',
        'total_gst',
        'total_amount',
        'created_by',
    ];

    public function frequency()
    {
        return $this->belongsTo(InvoiceFrequency::class, 'invoice_frequency_id');
    }
}
