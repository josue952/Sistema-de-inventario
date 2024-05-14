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
            $table->id('id');
            $table->string('Nombre')->nullable();
            $table->string('Apellido')->nullable();
            $table->string('email')->unique();
            $table->string('DUI')->unique() ->nullable();
            $table->enum('Rol', ['Administrador', 'Empleado']) ->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            // Restricción UNIQUE para 'Nombre', 'Apellido', 'Email' y 'DUI'
            $table->unique(['Nombre', 'Apellido', 'email', 'DUI']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Usuarios');
    }
};
