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
        DB::statement("CREATE VIEW `year_chart` AS select month(`cq_quanlybanhang1`.`orders`.`created_at`) AS `month`,`cq_quanlybanhang1`.`orders`.`total_money` AS `total_of_month` from `cq_quanlybanhang1`.`orders` where year(`cq_quanlybanhang1`.`orders`.`created_at`) = year(curtime()) and `cq_quanlybanhang1`.`orders`.`kind` = 3");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `year_chart`");
    }
};
