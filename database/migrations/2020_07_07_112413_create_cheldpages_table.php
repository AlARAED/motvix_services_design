<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheldpagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cheldpages', function (Blueprint $table) {
            $table->id();

            $table->string('title_en');
            $table->string('title_ge');
            $table->text('content_en');
            $table->text('content_ge');
            $table->string('url_category');
            $table->string('publish');//pub=1,no=0
            $table->unsignedBigInteger('page_id');
            $table->foreign('page_id')->references('id')->on('pages')
                   ->onDelete('cascade');

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
        Schema::dropIfExists('cheldpages');
    }
}
