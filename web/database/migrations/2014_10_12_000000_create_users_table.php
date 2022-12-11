<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('account_type');
            $table->string('verification_status')->default('uncompleted');
            $table->string('student_employment_status')->nullable();
            $table->string('photo')->nullable();
            $table->text('information')->nullable();
            $table->text('education')->nullable();
            $table->text('skills')->nullable();
            $table->text('projects_participation')->nullable();
            $table->bigInteger('telegram_id')->nullable();
            $table->string('telegram_auth_code')->unique();
            $table->double('student_rating')->default(0);
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
        Schema::dropIfExists('users');
    }
};
