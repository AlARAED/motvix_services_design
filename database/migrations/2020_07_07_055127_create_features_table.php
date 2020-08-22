<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Features;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_ge');
            $table->text('content_en');
            $table->text('content_ge');
             $table->text('link');
            $table->timestamps();
        });

          Features::create([
            'name_en' => 'IT Design',
            'name_ge'=>'IT-Design',
            'content_en'=>'We provide the most responsive and functional IT design for companies and businesses worldwide.',
            'content_ge'=>'Wir bieten Unternehmen und Unternehmen weltweit das reaktionsschnellste und funktionalste IT-Design.',
            'link'=>'assets/images/svg/linea-basic-heart.svg',
          ]);
          Features::create([
            'name_en' => 'IT Management',
            'name_ge'=>'IT-Management',
            'content_en'=>'It’s possible to simultaneously manage and transform information from one server to another.',
            'content_ge'=>'Es ist möglich, Informationen gleichzeitig von einem Server auf einen anderen zu verwalten und zu transformieren.',

             'link'=>'assets/images/svg/linea-basic-case.svg',
          ]);
          Features::create([
            'name_en' => 'Data Security',
            'name_ge'=>'Datensicherheit',
            'content_en'=>'We provide the most responsive and functional IT design for companies and businesses worldwide.',
            'content_ge'=>'Wir bieten Unternehmen und Unternehmen weltweit das reaktionsschnellste und funktionalste IT-Design.',
             'link'=>'assets/images/svg/linea-basic-alarm.svg',
          ]);
          Features::create([
            'name_en' => 'Business Reform',
            'name_ge'=>'Geschäftsreform',
            'content_en'=>'We provide the most responsive and functional IT design for companies and businesses worldwide.',
            'content_ge'=>'Wir bieten Unternehmen und Unternehmen weltweit das reaktionsschnellste und funktionalste IT-Design.',
             'link'=>'assets/images/svg/linea-basic-geolocalize-05.svg',
          ]);
          Features::create([
            'name_en' => 'Infrastructure Plan',
            'name_ge'=>'Infrastrukturplan',
            'content_en'=>'We provide the most responsive and functional IT design for companies and businesses worldwide.',
            'content_ge'=>'Wir bieten Unternehmen und Unternehmen weltweit das reaktionsschnellste und funktionalste IT-Design.',
             'link'=>'assets/images/svg/linea-ecommerce-money.svg',
          ]);
          Features::create([
            'name_en' => 'Firewall Advance',
            'name_ge'=>'Firewall-Fortschritt',
            'content_en'=>'We provide the most responsive and functional IT design for companies and businesses worldwide.',
            'content_ge'=>'Wir bieten Unternehmen und Unternehmen weltweit das reaktionsschnellste und funktionalste IT-Design.',
             'link'=>'assets/images/svg/linea-basic-spread-text-bookmark.svg',
          ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('features');
    }
}
