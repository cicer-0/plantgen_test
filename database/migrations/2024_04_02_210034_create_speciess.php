<?php 
use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//Generated By PlantUML Command
class CreateSpeciess extends Migration{
	public function up(){ 
 		Schema::create('speciess', function (Blueprint $table) { 
			$table->bigIncrements('id');
			$table->string('name');
			$table->string('scientific_name');
			$table->string('habitat');
			$table->string('diet');
			$table->timestamps();
		});
 	} 
	public function down(){
 
	} 
}