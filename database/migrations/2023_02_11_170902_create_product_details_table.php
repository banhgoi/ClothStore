<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_models')->nullable()->index('FK_product_details_product_models');
            $table->integer('order')->nullable();
            $table->integer('import')->nullable();
            $table->float('price', 10, 0)->nullable();
            $table->integer('id_order_detail')->nullable()->index('FK_product_details_orders_details');
            $table->integer('id_import_detail')->nullable()->index('FK_product_details_import_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_details');
    }
};
