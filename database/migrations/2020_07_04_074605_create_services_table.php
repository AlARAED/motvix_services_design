<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Service;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->text('addess1_en');
            $table->text('addess1_ge');
            $table->text('content_en');
            $table->text('content_ge');
            $table->timestamps();
        });

          Service::create([
            'addess1_en' => 'IT Design',
            'addess1_ge' => 'IT-Design',
            'content_en' => 'We provide the most responsive and functional IT design for companies and businesses worldwide.',
            'content_ge' => 'Wir bieten Unternehmen und Unternehmen weltweit das reaktionsschnellste und funktionalste IT-Design.',
            
        ]);


            Service::create([
            'addess1_en' => 'IT Management',
            'addess1_ge' => 'IT-Management',
            'content_en' => 'It’s possible to simultaneously manage and transform information from one server to another.',
            'content_ge' => 'Es ist möglich, Informationen gleichzeitig von einem Server auf einen anderen zu verwalten und zu transformieren.',
            
        ]);


              Service::create([
            'addess1_en' => 'Data Security
',
            'addess1_ge' => 'Datensicherheit',
            'content_en' => 'Back up your database, store in a safe and secure place while still maintaining its accessibility.',
            'content_ge' => 'Sichern Sie Ihre Datenbank, bewahren Sie sie an einem sicheren Ort auf und behalten Sie dabei den Zugriff bei.',
            
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
