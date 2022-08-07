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
        Schema::create('drafts', function (Blueprint $table) {
            $table->id();
            $table->string('developer', 10);
            $table->string('mentor', 10);
            $table->string('title', 20);
            $table->string('deploy_url', 100);
            $table->string('overview', 140);
            $table->string('background', 300)->nullable();
            $table->text('function')->nullable();
            $table->text('experience')->nullable();
            $table->string('slide', 300)->nullable();
            $table->text('usage')->nullable();
            $table->string('image_path', 100)->nullable();
            $table->string('movie_url', 100)->nullable();
            $table->string('github_url', 100)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portforio');
    }
};
