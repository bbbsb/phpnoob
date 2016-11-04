<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uid')->comment('用户id');
            $table->string('title', 200)->unique();
            $table->string('tag', 100)->comment('标签');
            $table->integer('cid')->comment('类型id');
            $table->text('content')->comment('文章内容');
            $table->string('attachment')->comment('附件');
            $table->string('cover')->comment('封面链接');
            $table->integer('click')->comment('点击率');
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
        Schema::drop('articles');
    }
}
