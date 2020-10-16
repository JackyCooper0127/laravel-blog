<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHessamLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hessam_languages', function (Blueprint $table) {
            $table->increments('lang_id');

            $table->string("name")->unique();
            $table->string("locale")->unique();
            $table->string("iso_code")->unique();
            $table->string("date_format")->unique();
            $table->boolean("active")->default(true);

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
        Schema::dropIfExists('hessam_languages');
    }
}
