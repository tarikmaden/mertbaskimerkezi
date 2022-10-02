<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIletisimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iletisims', function (Blueprint $table) {
            $table->id();
            $table->text("baslik")->nullable();
            $table->text("title")->nullable();
            $table->text("desc")->nullable();
            $table->text("ust_id")->nullable();
            $table->text("ar_id")->nullable();
            $table->text("gosterim_resmi")->nullable();
            $table->text("adres")->nullable();
            $table->text("tel1")->nullable();
            $table->text("tel2")->nullable();
            $table->text("tel3")->nullable();
            $table->text("fax")->nullable();
            $table->text("mail")->nullable();
            $table->text("facebook")->nullable();
            $table->text("instagram")->nullable();
            $table->text("twitter")->nullable();
            $table->text("google")->nullable();
            $table->text("whatsapp")->nullable();
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
        Schema::dropIfExists('iletisims');
    }
}
