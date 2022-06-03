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
        Schema::create('bcontents', function (Blueprint $table) {
            $table->bigIncrements ('id');  //オートインクリメント（自動増分）を付与した主キー
            $table->string('title',50);  //「VARCHAR」タイプ
            $table->text('contents');  //「TEXT」タイプ
            $table->integer('comment')->unsigned()->default(0);
            $table->integer('trackback')->unsigned()->default(0);
            $table->timestamps();//「created_at」と「updated_at」が２つ生成される
            $table->softDeletes();//論理削除用の「deleted_at」が生成される
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bcontents');
    }
};
