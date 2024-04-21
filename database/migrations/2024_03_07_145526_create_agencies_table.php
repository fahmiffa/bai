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
        Schema::create('agencies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user');     
            $table->string('name');
            $table->text('alamat');
            $table->string('leader');     
            $table->string('hpLeader');     
            $table->string('duty');     
            $table->string('hpDuty');     
            $table->string('mou');     
            $table->string('tsk');     
            $table->string('bank');     
            $table->enum('type',['kumai','tsk','kumaiTsk']);
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
        Schema::dropIfExists('agencies');
    }
};
