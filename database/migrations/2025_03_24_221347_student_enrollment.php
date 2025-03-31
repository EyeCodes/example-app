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
        Schema::create('student_enrollment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('studno');
            $table->foreign('studno')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
            
            $table->unsignedBigInteger('program_id');
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade')->onUpdate('cascade');
            
            $table->enum('year_level',[1,2,3,4,5]);
            
            $table->unsignedBigInteger('major_id')->nullable();
            $table->foreign('major_id')->references('id')->on('majors')->onDelete('cascade')->onUpdate('cascade');
            
            $table->unsignedBigInteger('semester_id');
            $table->foreign('semester_id')->references('id')->on('semester')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_enrollment');
    }
};
