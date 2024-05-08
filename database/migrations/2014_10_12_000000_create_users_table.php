<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_xxxxxx_create_users_table.php

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('surname');
            $table->string('first_name');
            $table->string('other_names')->nullable();
            $table->string('title');
            $table->date('date_of_birth');
            $table->string('home_county');
            $table->string('constituency');
            $table->string('ward');
            $table->string('ethnicity');
            $table->string('id_number');
            $table->string('gender');
            $table->string('email')->unique();
            $table->string('postal_address');
            $table->string('telephone');
            $table->boolean('living_with_disability')->default(false);
            $table->string('nature_of_disability')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
