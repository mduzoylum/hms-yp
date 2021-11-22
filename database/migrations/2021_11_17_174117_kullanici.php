<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Kullanici extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("kullanici", function (Blueprint $table) {

            $table->increments("id");
            $table->smallInteger("yonetici_mi")->default(0);
            $table->string("kullanici_adi", 50);
            $table->string("sifre", 50);
            $table->string("ad", 50);
            $table->string("soyad", 50);
            $table->string("mail", 50);
            $table->string("tel", 50);
            $table->boolean("onay")->default(0);
            $table->timestamp('olusturma_tarihi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('guncelleme_tarihi')->default(DB::raw('CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('silinme_tarihi')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("kullanici");
    }
}
