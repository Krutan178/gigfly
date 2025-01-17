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
        Schema::create('projects_skills', function (Blueprint $table) {
            $table->id();
            $table->string('uid', 20)->unique();
            $table->string('name', 60)->unique();
            $table->string('slug', 120)->unique();
            $table->unsignedBigInteger('category_id')->index();

            $table->foreign('category_id')->references('id')->on('projects_categories')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects_skills');
    }
};
