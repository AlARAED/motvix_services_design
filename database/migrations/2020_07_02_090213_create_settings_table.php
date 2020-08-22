<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\setting;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();           
            $table->string('image')->default('logo-dark.png');
            $table->string('name');            
            $table->string('email')->default('motvix@example.com');
            $table->string('shortdesc_en')->default('Show your business and design your website');
            $table->string('shortdesc_ge')->default('Zeigen Sie Ihr Unternehmen und gestalten Sie Ihre Website');
            $table->string('Mobile_no')->default('xxx_xxx_xxx');
            $table->string('clients')->default('80');
            $table->string('fb')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instegram')->nullable();
            $table->string('WebsiteUrl')->nullable();
            $table->string('watsapp')->default('xxx_xxx_xxx');

            $table->string('lin')->nullable();

            $table->text('about_en');
            
             $table->text('about_ge');

            
            $table->timestamps();
        });


        setting::create([
            'name' => 'motvix',
            'about_en'=>'A company offering 3D imaging services and providing website and application development services',
            'about_ge'=>'Ein Unternehmen, das 3D-Imaging-Dienste sowie Website- und Anwendungsentwicklungsdienste anbietet',
          
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
