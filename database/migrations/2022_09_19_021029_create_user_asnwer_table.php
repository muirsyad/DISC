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
        Schema::create('user_asnwers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            // $table->string('Q_1');
            // $table->string('Q_2');
            // $table->string('Q_3');
            // $table->string('Q_4');
            // $table->string('Q_5');
            // $table->string('Q_6');
            // $table->string('Q_7');
            // $table->string('Q_8');
            $table->integer('D_value');
            $table->integer('I_value');
            $table->integer('S_value');
            $table->integer('C_value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_asnwer');
    }
};
