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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('gender');
            $table->string('address');
            $table->integer('pin');
            $table->string('state');
            $table->string('district');
            $table->string('country');
            $table->string('po');
            $table->date('dob');
            
            $table->string('userlevel')->default(1);
            $table->integer('actnum')->default(0);
            $table->integer('age');
       
            $table->double('contact');

            // $table->string('role')->unique();
            $table->timestamp('email_verified_at')->nullable();
            
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
