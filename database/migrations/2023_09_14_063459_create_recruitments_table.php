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
        Schema::create('recruitments', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained("users");
            $table->string("dog_name");
            $table->foreignId("kind_id")->constrained("kinds");
            $table->string("dog_gender");
            $table->integer("dog_age");
            $table->foreignId("prefecture_id")->constrained("prefectures");
            $table->string("dog_condition");
            $table->string("terms");
            $table->string("fee");
            $table->string("message");
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
        Schema::dropIfExists('recruitments');
    }
};
