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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('deploy_url', 100);
            $table->string('overview', 300);
            $table->string('background', 300)->nullable();
            $table->text('function')->nullable();
            $table->text('experience')->nullable();
            $table->string('slide', 100)->nullable();
            $table->text('usage')->nullable();
            $table->string('movie_url', 100)->nullable();
            $table->string('github_url', 100)->nullable();
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
        Schema::dropIfExists('portfolios');
    }
};
