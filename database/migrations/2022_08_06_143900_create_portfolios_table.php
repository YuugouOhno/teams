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
            $table->string('background', 300);
            $table->text('function');
            $table->text('experience');
            $table->string('slide', 100);
            $table->text('usage');
            $table->string('movie_url', 100);
            $table->string('github_url', 100);
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
