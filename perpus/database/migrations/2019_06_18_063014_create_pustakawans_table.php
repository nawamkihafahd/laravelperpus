<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePustakawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pustakawans', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('nama',50);
			$table->string('alamat',200);
			$table->string('notelp',15);
			$table->bigInteger('jobdesc_id')->unsigned()->nullable();
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
        Schema::dropIfExists('pustakawans');
    }
}
