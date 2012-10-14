<?php

class Create_Project {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function($table) {
    $table->increments('id');
    // varchar 32
    $table->string('name', 50);
    $table->boolean('active')->default(true);
    $table->timestamps();
    $table->text('description');

    $table->primary('id');
    $table->unique('name');
    
});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects');
	}

}