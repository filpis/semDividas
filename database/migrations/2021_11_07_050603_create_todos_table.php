<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            
            $table->string('tipo_divida');
            $table->integer('atraso_inicial');
            $table->string('atraso_inicial_text');
            $table->integer('atraso_final');
            $table->string('atraso_final_text');
            $table->integer('juros_aplicados');
            $table->string('juros_aplicados_text');
            $table->integer('descontos_a_vista');
            $table->integer('parcelas_a_prazo');
            
          
            

            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('todos');
    }
    
    
}
