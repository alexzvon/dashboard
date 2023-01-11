<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('peoples', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('first_name');
            $table->string('second_name')->nullable();
            $table->string('sur_name');
            $table->string('nick_name');
            $table->date('birthday');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('peoples');
    }
};
