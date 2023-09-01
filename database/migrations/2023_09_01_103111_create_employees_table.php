<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email');
            $table->tinyInteger('gender');
            $table->date('birthday');
            $table->string('passport_number');
            $table->date('passport_expiring');
            $table->tinyInteger('visa_type');
            $table->date('visa_expiring');
            $table->string('contact_number');
            $table->string('current_address');
            $table->string('resident_country');
            $table->string('emergency_number');
            $table->string('image');
            $table->tinyInteger('department');
            $table->date('join_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
