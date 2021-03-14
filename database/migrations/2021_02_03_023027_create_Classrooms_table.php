<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClassroomsTable extends Migration {

	public function up()
	{
		Schema::create('Classrooms', function(Blueprint $table) {
			$table->increments('id');
			$table->string('Name_Class');
			$table->integer('Grade_Id')->unsigned();
		//	$table->foreign('Grade_Id')->references('id')->on('Grades')
			//			->onDelete('cascade')
				//s		->onUpdate('cascade');
			$table->timestamps();
		});
	}
	
	public function down()
	{
		Schema::drop('Classrooms');
	}
}