<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCountPlanToTargetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('targets', function (Blueprint $table) {
            $table->integer('qty_planned')
                ->default(0)
                ->unsigned();
            $table->integer('times_completed')
                ->default(0)
                ->unsigned();
            $table->float('percentage')
                ->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('targets', function (Blueprint $table) {
            $table->dropColumn('qty_planned');
            $table->dropColumn('times_completed');
            $table->dropColumn('percentage');
        });
    }
}
