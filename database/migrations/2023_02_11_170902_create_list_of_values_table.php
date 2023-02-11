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
        Schema::create('list_of_values', function (Blueprint $table) {
            $table->integer('id_list');
            $table->integer('id_element');
            $table->string('name_list', 50);
            $table->string('name_element', 50);
            $table->string('description', 200)->nullable();
            $table->timestamp('create_at')->useCurrentOnUpdate()->useCurrent();

            $table->primary(['id_list', 'id_element']);
            $table->unique(['name_list', 'name_element'], 'list_of_values_name_list_name_element_uindex');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_of_values');
    }
};
