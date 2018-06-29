<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreatProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creat_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ProductName');
            $table->string('CategoryName');
            $table->string('ManufacutreName');
            $table->float('ProductPrice',10,2);
            $table->integer('ProductQuantity');
            $table->text('ProductShortDescription');
            $table->text('ProductLongDescription');
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
        Schema::dropIfExists('creat_products');
    }
}
