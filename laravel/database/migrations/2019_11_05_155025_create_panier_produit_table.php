<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanierProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panier_produit', function (Blueprint $table) {
            $table->bigInteger('panier_id')->unsigned();
            $table->bigInteger('produit_id')->unsigned();
            $table->integer('quantité_de_produit')->unsigned();
            $table->timestamps();
        });

        Schema::table('panier_produit', function (Blueprint $table) {
            $table->foreign('panier_id')->references('id')->on('panier');
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
        Schema::dropIfExists('panier_produit');
    }
}
