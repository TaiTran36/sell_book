<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('publisher_id');
            $table->integer('category_id');
            $table->integer('author_id');
            $table->string('name');
            $table->integer('price');
            $table->text('img_path');
            $table->integer('vote');
            $table->integer('publish_year');
            $table->integer('quantity')->default(0);
            $table->integer('quantity_sold');
            $table->string('description');
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('books');
    }
}
