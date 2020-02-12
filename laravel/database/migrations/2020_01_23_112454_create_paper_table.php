<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 创建数据表
        Schema::create('paper', function (Blueprint $table) {
            $table->bigIncrements('id');  //
            $table->string('paper_name',100)->comment("试卷名");
            $table->tinyInteger('paper_score')->comment("试卷分数");
            $table->integer('start_time');
            $table->tinyInteger('duration');
            $table->tinyInteger('status')->default(1);
            $table->index('start_time'); //建立索引
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paper');
    }
}
