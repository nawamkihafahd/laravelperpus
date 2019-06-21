<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterBookrequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::table('bookrequests', function (Blueprint $table) {
			$table->foreign('pelanggan_id')->references('id')->on('pelanggans')->onDelete('set null');
			$table->foreign('pustakawan_id')->references('id')->on('pustakawans')->onDelete('set null');
			$table->foreign('book_id')->references('id')->on('books')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
