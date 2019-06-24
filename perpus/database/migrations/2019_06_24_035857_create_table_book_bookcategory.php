<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBookBookcategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_bookcategory', function (Blueprint $table) {
            $table->bigInteger('category_id')->unsigned()->nullable();
			$table->bigInteger('buku_id')->unsigned()->nullable();
			$table->foreign('category_id')->references('id')->on('bookcategories')->onDelete('cascade');
			$table->foreign('buku_id')->references('id')->on('books')->onDelete('cascade');
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
        Schema::dropIfExists('table_book_bookcategory');
    }
}
