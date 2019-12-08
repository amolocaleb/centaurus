<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevelopersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->dateTime('dob');
            $table->string('email')->unique();
            $table->string('status')->nullable();
            $table->string('title');
            $table->text('bio');
            $table->timestamps();
        });
    }
    /*
     * CREATE TABLE `users` (
	`user_id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(100) NOT NULL,
	`role_id` int(3) NOT NULL,
	`created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` DATETIME ,
	`deleted_at` DATETIME ,
	`password` varchar(150) NOT NULL,
	`email` varchar(60) NOT NULL UNIQUE,
	PRIMARY KEY (`user_id`)
);
     */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('developers');
    }
}
