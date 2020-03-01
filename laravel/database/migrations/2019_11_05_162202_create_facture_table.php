<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facture', function (Blueprint $table) {
            $table->bigInteger('id')->unique()->unsigned();
            $table->string('prix_total', 30);
            $table->bigInteger('panier_id')->unique()->unsigned();
            $table->timestamps();
        });
        Schema::table('facture', function (Blueprint $table) {
            $table->foreign('panier_id')->references('id')->on('panier');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facture');
    }
}
