<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('surname');
            $table->string('first_name');
            $table->string('other_names')->nullable();
            $table->string('title')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('home_county')->nullable();
            $table->string('constituency')->nullable();
            $table->string('ward')->nullable();
            $table->string('ethnicity')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->unique();
            $table->string('postal_address')->nullable();
            $table->string('telephone')->nullable();
            $table->boolean('living_with_disability')->default(false);
            $table->text('disability_description')->nullable();
            $table->string('user_id')->unique();
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
        Schema::dropIfExists('accounts');
    }
}
