<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNursingHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nursing_homes', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Needs');
            $table->string('Address');
            $table->string('Zip Code');
            $table->string('Mask Type');
            $table->string('Mask Fabric');
            $table->string('Mailing Address');
            $table->string('Other Information');
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
        Schema::dropIfExists('nursing_homes');
    }
}
