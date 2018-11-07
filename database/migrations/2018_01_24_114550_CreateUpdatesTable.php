<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


            Schema::create('updates', function (Blueprint $table) {


            $table->uuid('uuid');
            $table->integer('author_id');

            $table->integer('update_content', 240);


            //entities
            $table->string('entities');
            //urls
            $table->string('urls');

            //reactions
            $table->string('reactions');

            //replies
            $table->integer('in_reply_to_update_id');
            $table->integer('in_reply_to_user_id');

            //attachment

            $table->string('attatchment_type');
            $table->string('image_urls');

            //extra data

            $table->integer('boost_count');
            $table->integer('repost_count');
            $table->integer('reply_count');



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
