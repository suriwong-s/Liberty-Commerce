<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupe', function (Blueprint $table) {
        $table->bigInteger('id')->unsigned();
	    $table->string('groupe_name');
	    $table->bigInteger('rights_id')->unsigned();
            $table->timestamps();
        });
	
	Schema::table('groupe', function (Blueprint $table) {
	    $table->index('id');
	    $table->foreign('rights_id')->references('id')->on('rights');
	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groupe');
    }
}
