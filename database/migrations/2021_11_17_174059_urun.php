<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Urun extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("urun", function (Blueprint $table) {

            $table->increments("id");
            $table->string("referans_no", 100);
            $table->string("parca_no", 100);
            $table->string("tr_parca_adi", 100);
            $table->text("tr_ozellik");
            $table->string("en_parca_adi", 100);
            $table->text("en_ozellik");
            $table->string("ru_parca_adi", 100);
            $table->text("ru_ozellik");
            $table->integer("adet");
            $table->string("tl_fiyat", 50);
            $table->string("usd_fiyat", 50);
            $table->string("euro_fiyat", 50);
            $table->integer("ana_kategori");
            $table->integer("alt_kategori");
            $table->text("resim_parca");
            $table->text("resim_teknik");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("urun");
    }
}
