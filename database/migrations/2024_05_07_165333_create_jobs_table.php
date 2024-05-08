<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('jobs', function (Blueprint $table) {
        $table->id();
        $table->string('position');
        $table->string('job_group');
        $table->string('no_of_posts');
        $table->string('job_ref');
        $table->string('terms_of_service');
        $table->timestamps();
    });

    Schema::table('jobs', function (Blueprint $table) {
        $table->string('status')->default('open');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
