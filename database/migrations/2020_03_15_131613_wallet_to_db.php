<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WalletToDb extends Migration
{

    public function up()
    {
        Schema::create('wallets', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('user_id');
            $table->integer('money');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('wallets');
    }
}
