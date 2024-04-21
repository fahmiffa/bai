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
        Schema::create('fields', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('head');  
            $table->bigInteger('agency');  
            $table->string('company');      
            $table->string('jenis');     
            $table->string('hp');     
            $table->string('gender');     
            $table->string('placed');     
            $table->string('interview');     
            $table->string('arrival');     
            $table->string('departure');     
            $table->date('worktart');    
            $table->date('workEnd');     
            $table->text('complaint');    
            $table->string('section');     
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fields');
    }
};
