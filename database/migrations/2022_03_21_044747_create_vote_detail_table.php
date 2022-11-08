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
        Schema::create('vote_detail', function (Blueprint $table) {
            $table->integer("id_vote_detail")->autoIncrement();
            $table->integer('id_vote');
            $table->integer("id_poll");
            $table->integer("id_pilihan");
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
        Schema::dropIfExists('vote_detail');
    }
};
