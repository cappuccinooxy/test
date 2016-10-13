<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('links_id');
            $table->string('links_name')->defailt('')->comment('//名称');
            $table->string('links_title')->defailt('')->comment('//标题');
            $table->string('links_url')->defailt('')->comment('//链接');
            $table->string('links_order')->defailt('')->comment('//排序');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('links');
    }
}
