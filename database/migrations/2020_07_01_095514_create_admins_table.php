<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Admin;
class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('Mobile_no')->default('xxx_xxx_xxx');
            $table->string('occupaion')->default('Website adminstrator');
            $table->string('about');
            $table->text('image');
            $table->rememberToken();

            $table->timestamps();
        });



        Admin::create([
            'name' => 'Muhamed',
            'email' => 'Muhamed@m.com',
            'password' => Hash::make('123456'),
            'image' => 'logo.png',
            'about'=>'Website adminstrator',
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
