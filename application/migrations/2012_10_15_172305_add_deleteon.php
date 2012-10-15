<?php

class Add_Deleteon {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('projects', function($table){

			$table->foreign('screen_id')->references('id')->on('screens')->on_delete('cascade'); //don't know what
		
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}