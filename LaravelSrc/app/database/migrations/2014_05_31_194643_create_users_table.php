<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users',function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username', 20)->unique();
			$table->string('email')->unique();
			$table->string('first_name');
			$table->string('last_name');
			$table->string('password', 60);
			$table->string('remeber_token')->nullable();
			$table->boolean('is_active')->default(0);
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
		Schema::drop('users');
	}

}
