<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rights', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned();
	    $table->tinyInteger('write');
	    $table->tinyInteger('read');
	    $table->tinyInteger('edit');
	    $table->tinyInteger('delete');
            $table->timestamps();
        });
	Schema::table('rights', function (Blueprint $table) {
	    $table->index('id');
	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rights');
    }
}
