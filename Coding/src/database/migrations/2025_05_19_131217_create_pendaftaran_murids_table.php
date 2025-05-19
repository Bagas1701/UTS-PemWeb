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
        Schema::create('pendaftaran_murids', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('class');
            $table->string('nisn');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->foreignId('ekskul_id')->constrained('ekskuls')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran_murids');
    }
};
