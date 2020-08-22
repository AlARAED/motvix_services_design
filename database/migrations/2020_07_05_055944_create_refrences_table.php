<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Refrence;

class CreateRefrencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refrences', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_ge');
            $table->string('link');
            $table->string('frame_tab');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')
                   ->onDelete('cascade');
            $table->string('image');       

            $table->softDeletes();
            $table->timestamps();
        });

          Refrence::create([
            'name_en' => 'HOTEL TO THE YOUNG ROMAN',
            'name_ge' => 'HOTEL ZUM JUNGEN RÖMER',            
            'link' => 'https://www.google.com/maps/@47.4772499,13.5321116,3a,36.099998y,11.010000h,92.000000t/data=!3m4!1e1!3m2!1sAF1QipMab8InIIqtLl3Mmtxh8JVPzhz2UC2SMRmTa2tN!2e4?shorturl=1', 
            'frame_tab' => '1', 
            'category_id' => '1',
            'image' => '5f006fc7a59a2.jpg',

          ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('refrences');
    }
}
