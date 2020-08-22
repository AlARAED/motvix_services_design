<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_ge');
            $table->softDeletes();
            $table->timestamps();
        });


          category::create([
            'name_en' => 'WEBSEITE',
            'name_ge' => 'WEBSEITE',            
           

        ]);

           category::create([
            'name_en' => 'VIRTUAL TOURS ',
            'name_ge' => 'VIRTUELLE TOUREN',            
           

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {


        
        Schema::dropIfExists('categories');
    }
}
