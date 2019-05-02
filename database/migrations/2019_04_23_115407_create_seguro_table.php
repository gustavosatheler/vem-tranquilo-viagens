<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeguroTable extends Migration
{
    private $databaseName = 'seguro';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->databaseName, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('empresa');
            $table->double('valor');
            $table->string('assegura');
            $table->date('data_inicio');
            $table->date('data_vigencia');
            $table->boolean('vigente');

            $table->unsignedBigInteger('tipo_id')->default(0);
            $table->foreign('tipo_id')->references('id')->on('tipo_seguro');

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
        Schema::dropIfExists($this->databaseName);
    }
}
