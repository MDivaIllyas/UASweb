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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->references('role_id')->on('roles')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('gender_id')->references('gender_id')->on('genders')->onUpdate('cascade')->onDelete('cascade');
            $table->string('first_name',25);
            $table->string('middle_name',25)->nullable();
            $table->string('last_name',25);
            $table->string('email',50)->unique();
            $table->string('password',100);
            $table->string('display_picture_link',255);
            $table->Integer('delete_flag')->nullable();
            $table->date('modified_at')->nullable();
            $table->string('modified_by',255)->nullable();
            $table->rememberToken();
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
