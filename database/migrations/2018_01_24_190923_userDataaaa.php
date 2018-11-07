<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserDataaaa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('user_data', function (Blueprint $table) {


            $table->integer('user_id');
            $table->string('username');
            $table->string('name');
            $table->string('avatar_url');
            $table->string('verified');
            $table->integer('follower_count');
            $table->integer('following_count');
            $table->integer('reaction_count');
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
