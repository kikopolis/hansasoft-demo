<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id');
            $table->string('patient_name');
            $table->string('patient_address');
            $table->string('patient_phone');
            $table->string('patient_email');
            $table->string('medication_name');
            $table->string('medication_dosage');
            $table->string('medication_frequency');
            $table->string('medication_duration');
            $table->string('medication_quantity');
            $table->string('medication_refills');
            $table->string('medication_notes');
            $table->string('medication_prescriber');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('prescriptions');
    }
};
