<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre', 45);
            $table->integer('prix');
            $table->text('description');
            $table->enum('disponibilité', array('In stock', 'Sold out'));
            $table->integer('quantité')->nullable();
            $table->string('image', 255);
            $table->bigInteger('categorie_id')->unsigned();
            $table->timestamps();
        });
        
        Schema::table('produit', function (Blueprint $table) {
            $table->foreign('categorie_id')->references('id')->on('categorie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produit');
    }
}
