<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50)->nullable();
            $table->double('price')->nullable();
            $table->string('per_time', 30)->nullable();
            $table->text('details', 300)->nullable();
            $table->boolean('fulltime_availability')->default(false);
            $table->boolean('anytime_support')->default(false);
            $table->boolean('bug_fixing')->default(false);
            $table->boolean('system_setup')->default(false);
            $table->boolean('customize_old_application')->default(false);
            $table->boolean('fullstack_development')->default(false);
            $table->boolean('setup_new_feature')->default(false);
            $table->boolean('web_media_design')->default(false);
            $table->boolean('content_writing')->default(false);
            $table->boolean('design_customization')->default(false);
            $table->string('revision', 20)->nullable();
            $table->string('deslivery_time', 30)->nullable();
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
        Schema::dropIfExists('packages');
    }
}
