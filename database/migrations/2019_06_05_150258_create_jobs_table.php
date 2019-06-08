<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->longText('description')->nullable();
            $table->string('salary')->nullable();
            $table->datetime('closed_date');
            $table->integer('limit_post')->nullable();
            $table->enum('job_type', ['internal', 'external'])->default('external');
            $table->unsignedInteger('job_category_id');
            $table->string('contact_email');
            $table->string('contact_number');
            $table->boolean('is_featured')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('jobs');
    }
}
