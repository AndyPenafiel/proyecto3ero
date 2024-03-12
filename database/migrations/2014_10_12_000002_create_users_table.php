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
            $table->id('usu_id');
            $table->foreignId('rol_id')->references('rol_id')->on('roles');
            $table->string('usu_nombre');
            $table->string('email')->unique();
            $table->string('usu_telefono')->nullable();
            $table->string('password');
            $table->string('name');//nombre del usuario
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            $table->rememberToken();
            $table->date('usu_fecha_registro')->nullable();
            $table->integer('usu_estado')->default(1);
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
