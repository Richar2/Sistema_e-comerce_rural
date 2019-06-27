<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            
            $table->Increments('id');
            $table->integer('data_user_id')->unsigned()->default(1);
            $table->string('email_user' , 100)->nullable()->unique();
            $table->string('password_user')->nullable();
            $table->timestamps();
            $table->charset = 'utf8';
            $table->engine = 'InnoDB';
            $table->collation = 'utf8_unicode_ci';
            
            
            /**constrange */
            $table->foreign('data_user_id')
                  ->references('id')
                  ->on('data_users')
                  ->onDelete('cascade');   
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
