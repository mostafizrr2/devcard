<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {

            $table->bigIncrements('id');
            
            $table->string('my_name', 150)->deafault("Demo User")->nullable();
            $table->string('my_title', 255)->deafault("Demo title")->nullable();
            $table->text('my_short_description')->nullable();
            $table->text('my_brief_description')->nullable();

            $table->string('my_profile_image', 150)->nullable();
            $table->string('my_about_image', 150)->nullable();

            $table->string('my_working_title', 255)->deafault("What i do?")->nullable();
            $table->text('my_working_description')->nullable();

            $table->string('my_primary_phone', 20)->nullable();
            $table->string('my_secondery_phone', 20)->nullable();

            $table->string('my_primary_email', 150)->nullable();
            $table->string('my_secondery_email', 150)->nullable();

            $table->string('my_web_address', 150)->nullable();

            $table->string('my_street_address', 255)->nullable();
            $table->string('my_city', 50)->nullable();
            $table->string('my_zip', 10)->nullable();

            $table->string('my_latitude', 50)->nullable();
            $table->string('my_longitude', 50)->nullable();

            //Portfolio page 
            $table->string('portfolio_title', 50)->nullable();
            $table->text('portfolio_description', 300)->nullable();
            
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
        Schema::dropIfExists('profiles');
    }
}
