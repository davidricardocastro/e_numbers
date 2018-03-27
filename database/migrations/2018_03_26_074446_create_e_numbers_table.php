<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateENumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_numbers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('group_type');
            $table->text('code');
            $table->text('name');
            $table->text('purpose');
            $table->text('status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('e_numbers');
    }
}
