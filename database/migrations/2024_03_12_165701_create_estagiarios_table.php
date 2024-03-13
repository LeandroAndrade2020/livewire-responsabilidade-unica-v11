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
        Schema::create('estagiarios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cpf');
            $table->string('telefone');
            $table->string('bairro');
            $table->smallInteger('curso');
            $table->smallInteger('periodo');
            $table->date('inicio_contrato');
            $table->date('fim_contrato');
            $table->foreignId('escola_id')->nullable()->constrained();
            $table->smallInteger('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estagiarios');
    }
};
