<?php

class Create_Screens {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('screens', function($table) {
    		$table->increments('id');
    		$table->string('name');
    		$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		$Schema::drop('screens');
	}

}