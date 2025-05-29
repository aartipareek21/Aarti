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
        Schema::create('system', function (Blueprint $table) {
         $table->id();
            $table->string('name');
            $table->number('due_date');
             $table->ununsignedIntegerigne('proj_id');
             $table->foreign('proj-id')->references('id')->on('projects');
            $table->string('desc');
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
