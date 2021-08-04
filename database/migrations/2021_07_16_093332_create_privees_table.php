<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriveesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privees', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('city');
            $table->string('domaine');
            $table->string('position');
            $table->string('currency');
            $table->string('salary');
            $table->longText('description');
            $table->string('dateFinal');
            $table->string('cvemail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('privees');
    }
}
