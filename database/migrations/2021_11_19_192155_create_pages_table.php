<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->text("baslik")->nullable();
            $table->text("icerik")->nullable();
            $table->text("ozet")->nullable();
            $table->text("slug")->nullable();
            $table->text("text1")->nullable();
            $table->text("text2")->nullable();
            $table->text("text3")->nullable();
            $table->text("text4")->nullable();
            $table->text("text5")->nullable();
            $table->text("text6")->nullable();
            $table->text("text7")->nullable();
            $table->text("text8")->nullable();
            $table->text("text9")->nullable();
            $table->text("text10")->nullable();
            $table->text("title")->nullable();
            $table->text("desc")->nullable();
            $table->text("ust_id")->nullable();
            $table->text("ar_id")->nullable();
            $table->text("gosterim_resmi")->nullable();
            $table->text("resimler")->nullable();
            $table->text("yetkinlik")->nullable();
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
        Schema::dropIfExists('pages');
    }
}
