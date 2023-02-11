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
        Schema::create('import_details', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_import')->nullable()->index('FK_import_details_import_bill');
            $table->integer('id_model')->nullable()->index('FK_import_details_product_models');
            $table->integer('quantity')->nullable();
            $table->float('price', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('import_details');
    }
};
