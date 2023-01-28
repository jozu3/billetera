<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recargas', function (Blueprint $table) {
            $table->id();
            $table->double('monto');
            $table->string('numoperacion')->nullable();
            $table->date('fecha');
            $table->date('fecha_atencion');
            $table->foreignId('jugadore_id')->constrained();
            $table->foreignId('medio_id')->constrained();
            $table->foreignId('cuenta_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->foreign('updated_by')->references('id')->on('users')->nullable();
            $table->string('motivo_update')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recargas');
    }
};
