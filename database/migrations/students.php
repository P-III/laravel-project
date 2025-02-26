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
        Schema::create('students', function (Blueprint $table) {
            $table->id('StudentId');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Gender');
            $table->date('DateOfBirth');
            $table->string('ContactNumber');
            $table->string('Email');
            $table->string('Address');
            $table->string('EnrollmentDate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
