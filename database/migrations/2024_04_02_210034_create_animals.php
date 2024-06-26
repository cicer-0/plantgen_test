<?php
use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//Generated By PlantUML Command
class CreateAnimals extends Migration{
	public function up(){
 		Schema::create('animals', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name');
			$table->integer('species_id');
			$table->integer('enclosure_id');
			$table->integer('activity_id');
			$table->date('date_of_birth');
			$table->string('gender');
			$table->float('weight');
			$table->string('health_status');
			$table->timestamps();

            $table->foreign('species_id')->references('id')->on('species')->onDelete('cascade');
            $table->foreign('enclosure_id')->references('id')->on('enclosures')->onDelete('cascade');
            $table->foreign('activity_id')->references('id')->on('activities')->onDelete('cascade');

		});
 	}
	public function down(){

	}
}
