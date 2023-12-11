<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name', 25)->nullable(false);
            $table->string('surnames', 50)->nullable(false);
            $table->string('profession')->nullable(false);
            $table->timestamps();
        });

        Schema::create('profile_contact', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('location', 25)->nullable(false);
            $table->string('zip_code', 5)->nullable(false);;
            $table->string('phone', 15)->nullable(false);
            $table->string('email', 50)->nullable(false);
            $table->timestamps();
        });

        Schema::create('profile_education', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name_title')->nullable(false);
            $table->string('title')->nullable(false);
            $table->string('institution')->nullable(false);
            $table->string('location_academic')->nullable(false);
            $table->date('start_year')->nullable(false);
            $table->date('end_year')->nullable(false);
            $table->timestamps();
        });

        Schema::create('profile_experience', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name_company')->nullable(false);
            $table->date('start_date')->nullable(false);
            $table->date('end_date')->nullable(false);
            $table->string('description_1', 250)->nullable(false);
            $table->string('description_2', 250)->nullable(true);
            $table->string('description_3', 250)->nullable(true);
            $table->string('description_4', 250)->nullable(true);
            $table->string('description_5', 250)->nullable(true);
            $table->timestamps();
        });

        Schema::create('profile_skills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('programming_language')->nullable(false);
            $table->string('programming_language_2')->nullable(true);
            $table->string('programming_language_3')->nullable(true);
            $table->string('programming_language_4')->nullable(true);
            $table->string('programming_language_5')->nullable(true);
            $table->string('framework')->nullable(true);
            $table->string('framework_2')->nullable(true);
            $table->string('framework_3')->nullable(true);
            $table->string('framework_4')->nullable(true);
            $table->string('framework_5')->nullable(true);
            $table->string('markup_language')->nullable(true);
            $table->string('markup_language_2')->nullable(true);
            $table->string('markup_language_3')->nullable(true);
            $table->string('markup_language_4')->nullable(true);
            $table->string('markup_language_5')->nullable(true);
            $table->string('database')->nullable(true);
            $table->string('database_2')->nullable(true);
            $table->string('database_3')->nullable(true);
            $table->string('database_4')->nullable(true);
            $table->string('database_5')->nullable(true);
            $table->string('control_version')->nullable(true);
            $table->string('control_version_2')->nullable(true);
            $table->string('control_version_3')->nullable(true);
            $table->string('control_version_4')->nullable(true);
            $table->string('control_version_5')->nullable(true);
            $table->string('other')->nullable(true);
            $table->string('other_2')->nullable(true);
            $table->string('other_3')->nullable(true);
            $table->string('other_4')->nullable(true);
            $table->string('other_5')->nullable(true);
            $table->timestamps();
        });

        Schema::create('profile_language', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('language')->nullable(false);
            $table->string('level')->nullable(true);
            $table->string('title_language')->nullable(true);
            $table->timestamps();
        });

        Schema::create('profile_interests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('interest')->nullable(true);
            $table->timestamps();
        });

        Schema::create('profile_urls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('url_linkedIn')->nullable(true);
            $table->string('url_github')->nullable(true);
            $table->string('url_web')->nullable(true);
            $table->string('url_other')->nullable(true);
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
        Schema::dropIfExists('profile_user');
        Schema::dropIfExists('profile_contact');
        Schema::dropIfExists('profile_education');
        Schema::dropIfExists('profile_experience');
        Schema::dropIfExists('profile_skills');
        Schema::dropIfExists('profile_language');
        Schema::dropIfExists('profile_interests');
        Schema::dropIfExists('profile_urls');
    }
}
