<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldToCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
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
        Schema::table('companies', function (Blueprint $table) {
            //
            $table->id();
            $table->dropColumn('companyName');
            $table->dropColumn('country');
            $table->dropColumn('province');
            $table->dropColumn('city');
            $table->dropColumn('adress');
            $table->dropColumn('companyTel');
            $table->dropColumn('domaine');
            $table->dropColumn('position');
            $table->dropColumn('currency');
            $table->dropColumn('salary');
            $table->dropColumn('description');
            $table->dropColumn('dateFinal');
            $table->dropColumn('cvemail');
            $table->dropColumn();
        });
    }
}
