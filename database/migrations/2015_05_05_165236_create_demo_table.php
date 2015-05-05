<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//$_SERVER["HTTP_USER_AGENT"]
		//$_SERVER["REMOTE_ADDR"]
		Schema::create('visitors', function($table) {
			$table->increments('id');
			$table->char('user_ip', 45);
			$table->char('user_agent', 45);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('visitors');
	}

}
