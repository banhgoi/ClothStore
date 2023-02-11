<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `month_chart` AS select `cq_quanlybanhang1`.`orders`.`kind` AS `kind` from `cq_quanlybanhang1`.`orders` where year(`cq_quanlybanhang1`.`orders`.`created_at`) = year(curtime()) and month(`cq_quanlybanhang1`.`orders`.`created_at`) = month(curtime())");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `month_chart`");
    }
};
