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
        Schema::table('import_details', function (Blueprint $table) {
            $table->foreign(['id_import'], 'FK_import_details_import_bill')->references(['id'])->on('import_bill')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_model'], 'FK_import_details_product_models')->references(['id'])->on('product_models')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('import_details', function (Blueprint $table) {
            $table->dropForeign('FK_import_details_import_bill');
            $table->dropForeign('FK_import_details_product_models');
        });
    }
};
