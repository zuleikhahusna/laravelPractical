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
        schema::create('students', function(Blueprint $table){
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('student-id');
            $table->string('email');
            $table->string('password');
        

            $table->timestamps();
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
