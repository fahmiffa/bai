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
        Schema::create('independents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('head');  
            $table->bigInteger('user');  
            $table->string('name');                  
            $table->string('hp');     
            $table->string('gender');     
            $table->string('placed');        
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('independents');
    }
};
