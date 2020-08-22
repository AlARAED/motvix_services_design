<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Slider;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->text('addess1_en');
            $table->text('addess1_ge');
            $table->text('addess2_en');
            $table->text('addess2_ge');

            $table->text('addess3_en');
            $table->text('addess3_ge');

            $table->string('image')->default('5f002167d506f.jpg');
            $table->timestamps();
        });


        Slider::create([
            'addess1_en' => 'IT Services Designed For',
            'addess1_ge'=>'IT Services Designed For',
            'addess2_en'=>'Your Business',
            'addess2_ge'=>'Your Business',
            'addess3_en'=>'Highly Tailored IT Design, Management & Support Services.',
            'addess3_ge'=>'Highly Tailored IT Design, Management & Support Services.',
            
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sliders');
    }
}
