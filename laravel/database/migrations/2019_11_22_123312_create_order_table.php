<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('titre')->nullable();
            $table->string('prixtotal', 20)->nullable();
            $table->integer('qty')->nullable();
            $table->BigInteger('produit_id')->unsigned()->nullable();
            $table->text('panier_id')->nullable();
            $table->timestamps();
        });

        Schema::table('order', function (Blueprint $table) {
            $table->foreign('produit_id')->references('id')->on('produit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
