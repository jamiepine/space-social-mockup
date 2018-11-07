<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AccountingTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accountingTransactions', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('name');
            $table->string('category');
            $table->string('account');
            $table->string('type');
            $table->decimal('amount');
            $table->decimal('notes');
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
        //
    }
}
