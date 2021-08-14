<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldToPriveesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('privees', function (Blueprint $table) {
            //

        });
    }

    /**
     * Reverse the migrations.
     * php artisan migrate:rollback
     * @return void
     */
    public function down()
    {
        Schema::table('privees', function (Blueprint $table) {
            //
            $table->dropColumn('province');
            $table->string('dateFinal')->change();
        });
    }
}
