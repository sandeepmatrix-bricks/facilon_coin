<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_provider_billings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_provider_id');
            $table->unsignedBigInteger('invoice_frequency_id');
            $table->string('state')->nullable();
            $table->decimal('base_charge', 12, 2)->default(0);
            $table->decimal('fees_1', 12, 2)->default(0);
            $table->decimal('fees_2', 12, 2)->default(0);
            $table->decimal('fees_3', 12, 2)->default(0);
            $table->decimal('cgst', 5, 2)->default(0);
            $table->decimal('sgst', 5, 2)->default(0);
            $table->decimal('igst', 5, 2)->default(0);
            $table->decimal('ope', 12, 2)->default(0);
            $table->decimal('total_gst', 12, 2)->default(0);
            $table->decimal('total_amount', 12, 2)->default(0);
            $table->unsignedBigInteger('created_by');
            $table->enum('approval_status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->unsignedBigInteger('approved_by')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_provider_billings');
    }
};
