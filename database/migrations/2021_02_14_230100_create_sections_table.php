<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSectionsTable extends Migration {

	public function up()
	{
		Schema::create('sections', function(Blueprint $table) {
			$table->increments('id');
			$table->string('Name_Section');
			$table->integer('Status');
			$table->Integer('Grade_Id')->unsigned();
			$table->Integer('Class_Id')->unsigned();
			$table->timestamps();
		//	$table->foreign('Grade_Id')->references('id')->on('Grades')
				//		->onDelete('cascade')
				//		->onUpdate('cascade');
		//	$table->foreign('Class_Id')->references('id')->on('Classrooms')
					//	->onDelete('cascade')
					//	->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::drop('sections');
	}
}