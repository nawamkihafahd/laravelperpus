<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookrequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookrequests', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('status', 20);
			$table->bigInteger('pelanggan_id')->unsigned()->nullable();
			$table->bigInteger('pustakawan_id')->unsigned()->nullable();
			$table->bigInteger('book_id')->unsigned()->nullable();
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
        Schema::dropIfExists('bookrequests');
    }
}
