<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('companyName');
            $table->string('country');
            $table->string('province');
            $table->string('city');
            $table->string('adress');
            $table->string('companyTel');
            $table->string('domaine');
            $table->string('position');
            $table->string('currency');
            $table->integer('salary');
            $table->longText('description');
            $table->string('dateFinal');
            $table->string('cvemail');
            $table->timestamps();

            $table->index('user_id');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
