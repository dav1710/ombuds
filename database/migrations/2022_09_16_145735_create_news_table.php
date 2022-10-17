<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title_am');
            $table->string('title_en');
            $table->string('content_am');
            $table->string('content_en');
            $table->string('img')->nullable(true);
            $table->enum('news_type', ['news', 'interviews', 'videos', 'statements', 'success_stories']);
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
        Schema::table('news', function($table)
        {
            $table->dropColumn('title_am');
            $table->dropColumn('title_en');
            $table->dropColumn('content_am');
            $table->dropColumn('content_en');
            $table->dropColumn('img');
            $table->dropColumn('news_type');
        });
    }
}
