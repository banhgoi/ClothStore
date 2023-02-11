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
        DB::statement("CREATE VIEW `year_chart_import` AS select month(`cq_quanlybanhang1`.`import_bill`.`created_at`) AS `month`,`cq_quanlybanhang1`.`import_bill`.`total_money` AS `total_of_month` from `cq_quanlybanhang1`.`import_bill` where year(`cq_quanlybanhang1`.`import_bill`.`created_at`) = year(curtime())");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `year_chart_import`");
    }
};
