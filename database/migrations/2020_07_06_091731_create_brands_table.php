<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\brands;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('image'); 
            $table->softDeletes();
            $table->timestamps();
        });

           brands::create([
            'image' => 'band1.png',

          ]);
            brands::create([
            'image' => 'band2.png',

          ]);

             brands::create([
            'image' => 'band3.png',

          ]);
              brands::create([
            'image' => 'band4.png',

          ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brands');
    }
}
