<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('survey', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('registration_id', 100)->unique();
			$table->string('vehicles_owned', 100);
			$table->string('other_vehicles_owned', 100)->nullable();
			$table->string('fuel', 100);
			$table->string('car_body_type', 100);
			$table->string('other_car_body_type', 100)->nullable();
			$table->string('car_colors', 100);
			$table->string('other_car_color', 100)->nullable();
			$table->string('upholstery_color', 100);
			$table->integer('rating_exterior_design');
			$table->integer('rating_interior_design');
			$table->integer('rating_engine_power');
			$table->integer('rating_handling');
			$table->integer('rating_comfort_luxury');
			$table->integer('rating_technology');
			$table->integer('rating_safety');
			$table->integer('rating_brand');
			$table->integer('rating_fuel_economy');
			$table->integer('rating_pricing');
			$table->integer('rating_maintenance_cost');
			$table->integer('rating_others');
			$table->string('other_rating', 100);
			$table->string('car_choices', 100);
			$table->string('other_car_choice', 100)->nullable();
			$table->string('why_buy_a_bmw', 100);
			$table->string('other_why_buy_a_bmw', 100)->nullable();
			$table->string('receive_correspondence', 5);
			$table->string('notify_bmw', 5);
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('survey');
	}

}
