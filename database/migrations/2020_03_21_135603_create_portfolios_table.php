<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('project_name', 150)->nullable();
            $table->string('slug')->nullable();
            $table->string('project_intro', 255)->nullable();
            $table->string('client_name', 50)->nullable();
            $table->integer('project_size')->nullable();
            $table->string('project_url', 200)->nullable();
            $table->string('project_image')->nullable();
            $table->text('short_description')->nullable();
            $table->text('brief_description')->nullable();
            $table->unsignedBigInteger('testimonial_id')->nullable();
            $table->boolean('is_featured')->default(true);
            $table->boolean('status')->default(true);
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
}
