<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('course_student', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->foreignId('course_id')->constrained()->onDelete('cascade');

            // Prevent duplicate enrollment (Bonus-ready)
            $table->unique(['student_id', 'course_id']);

            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('course_student');
    }
};
