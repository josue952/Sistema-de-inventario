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
        Schema::create('Usuarios', function (Blueprint $table) {
            $table->id('idUsuario');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Email')->unique();
            $table->string('DUI')->unique();
            $table->enum('Rol', ['Administrador', 'Empleado']);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Contraseña');
            $table->rememberToken();
            $table->timestamps();

            // Restricción UNIQUE para 'Nombre', 'Apellido', 'Email' y 'DUI'
            $table->unique(['Nombre', 'Apellido', 'Email', 'DUI']);
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
