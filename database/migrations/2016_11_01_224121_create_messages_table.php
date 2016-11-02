<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function(Blueprint $table)
        {
            $table->increments("id");
            $table->string("sender");
            $table->string("subject");
            $table->text("message");
            $table->timestamp("time_sent");
            $table->boolean("is_read")->default(false);
            $table->timestamp("time_read")->nullable();
            $table->boolean("is_archived")->default(false);
            $table->timestamp("time_archived")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("messages");
    }
}
