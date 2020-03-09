<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnRateAcademyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('academies', function (Blueprint $table) {
            $table->json('rate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('academies', 'rate')) {
            Schema::table('rates', function (Blueprint $table) {
                $table->dropColumn('rate');
            });
        }
    }
}
