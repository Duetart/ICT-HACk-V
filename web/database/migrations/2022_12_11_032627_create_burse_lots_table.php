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
        Schema::create('burse_lots', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('photo')->nullable();
            $table->foreignId('author')->constrained('users');
            $table->string('status')->default('pending');
            $table->text('sponsors_list')->nullable();
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
        Schema::dropIfExists('burse_lots');
    }
};
