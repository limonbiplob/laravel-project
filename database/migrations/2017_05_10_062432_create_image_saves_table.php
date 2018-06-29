<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageSavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('image_saves', function (Blueprint $table) {
                $table->increments('id');
                 $table->string('CategoryName');
                 $table->string('ManufacutreName');
                  $table->text('ProductImage');
                  $table->tinyInteger('publicationStatus');
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
        Schema::dropIfExists('image_saves');
    }
}