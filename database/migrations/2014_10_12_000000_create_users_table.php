<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100)->unique(); // auto unique idex
            $table->string('email',155)->unique();  // auto unique idex
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('nice_name', 191)->nullable();
            $table->string('phone', 191)->nullable();
            $table->string('gender', 100)->nullable();
            $table->string('picture', 255)->nullable();
            $table->boolean('block_status')->default(0);
            $table->boolean('online_status')->default(0);
            $table->integer('role_id')->nullable();
            $table->index('nice_name'); //manually index the column
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
}
