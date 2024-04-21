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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company');          
            $table->string('name');
            $table->text('alamat');
            $table->string('jenis');
            $table->string('placed');            
            $table->integer('count');
            $table->string('age');
            $table->string('gender');
            $table->double('salary');
            $table->double('support');
            $table->text('note');
            $table->string('pile');
            $table->integer('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
