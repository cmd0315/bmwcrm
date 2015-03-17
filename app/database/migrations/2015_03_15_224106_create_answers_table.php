<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
		public function up()
	{
		Schema::create('answers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('participant_id', 100)->unique();
			$table->string('vehicles_owned', 100);
			$table->string('fuel', 100);
			$table->string('car_body_type', 100);
			$table->string('car_colors', 100);
			$table->string('upholstery_color', 100);
			$table->string('buying_criteria', 100);
			$table->string('car_choices', 100);
			$table->string('why_buy_a_bmw', 100);
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
		Schema::drop('answers');
	}

}
