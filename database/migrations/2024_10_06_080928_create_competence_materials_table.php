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
        Schema::create('competencies_materials', function (Blueprint $table) {
            $table->unsignedBigInteger('id_kompetensi');
            $table->unsignedBigInteger('id_materi');
    
            // Foreign keys
            $table->foreign('id_kompetensi')->references('id_kompetensi')->on('competencies')->onDelete('cascade');
            $table->foreign('id_materi')->references('id_materi')->on('materials')->onDelete('cascade');
    
            // Composite Primary Key
            $table->primary(['id_kompetensi', 'id_materi']);
    
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competencies__materials');
    }
};
