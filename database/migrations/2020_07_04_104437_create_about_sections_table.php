<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\AboutSection;

class CreateAboutSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_sections', function (Blueprint $table) {
            $table->id();
            $table->text('addess1_en');
            $table->text('addess1_ge');
            $table->text('content_en');
            $table->text('content_ge');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');
            $table->string('image5');
            $table->timestamps();
        });


           AboutSection::create([
            'addess1_en' => 'We’ve been triumphing
                            all these 38 years.
                            Sacrifices are made up
                            with success.',
            'addess1_ge' => 'Wir haben gesiegt
                                all diese 38 Jahre.
                                Opfer werden erfunden
                                mit Erfolg.',
            'content_en' => 'Mitech takes into consideration every little detail to make sure the system run smoothly and responsively. Mitech employs a new technique called Minified Technology for securing customers’ database & building up highly confidential firewalls.',
            'content_ge' => 'Mitech berücksichtigt jedes Detail, um sicherzustellen, dass das System reibungslos und reaktionsschnell funktioniert. Mitech verwendet eine neue Technik namens Minified Technology, um die Datenbank der Kunden zu sichern und streng vertrauliche Firewalls aufzubauen.',
            'image1' =>'imae1.jpg',
            'image2' =>'image2.jpg',
            'image3' =>'imae3.jpg',
            'image4' =>'image4.jpg',
            'image5' =>'image4.jpg',





            
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_sections');
    }
}
