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
        Schema::create('attendance', function (Blueprint $table) {
            $table->id('AttendanceId');
            $table->unsignedBigInteger('StudentId');
            $table->unsignedBigInteger('CourseId');
            $table->timestamp('AttendanceDate')->nullable();
            $table->string('AttendanceStatus');
            $table->foreign('StudentId')->references('StudentId')->on('students')->onDelete('cascade');
            $table->foreign('CourseId')->references('CourseId')->on('courses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance');
    }
};
