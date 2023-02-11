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
        Schema::table('product_details', function (Blueprint $table) {
            $table->foreign(['id_import_detail'], 'FK_product_details_import_details')->references(['id'])->on('import_details')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_models'], 'FK_product_details_product_models')->references(['id'])->on('product_models')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_order_detail'], 'FK_product_details_orders_details')->references(['id'])->on('orders_details')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_details', function (Blueprint $table) {
            $table->dropForeign('FK_product_details_import_details');
            $table->dropForeign('FK_product_details_product_models');
            $table->dropForeign('FK_product_details_orders_details');
        });
    }
};
