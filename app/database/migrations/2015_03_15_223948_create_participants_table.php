<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('participants', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('participant_id', 100)->unique();
			$table->string('personal_salutation', 30);
			$table->string('first_name', 60);
			$table->string('middle_initial', 5);
			$table->string('last_name', 60);
			$table->string('nickname', 30);
			$table->integer('gender');
			$table->integer('status');
			$table->date('birthdate');
			$table->integer('age');
			$table->string('hobbies', 100);
			$table->string('mobile_number', 20);
			$table->string('email_address', 50);
			$table->string('occupation', 100);
			$table->string('company_name', 100);
			$table->string('home_address1', 100);
			$table->string('home_address2', 100);
			$table->string('home_city', 250);
			$table->string('home_province', 250);
			$table->string('home_zip_code', 250);
			$table->string('home_phone', 20);
			$table->string('business_industry', 100);
			$table->string('business_address1', 100);
			$table->string('business_address2', 100);
			$table->string('business_city', 250);
			$table->string('business_province', 250);
			$table->string('business_zip_code', 250);
			$table->string('business_phone', 20);
			$table->string('spouse_salutation', 30);
			$table->string('spouse_first_name', 60);
			$table->string('spouse_last_name', 60);
			$table->date('spouse_birthdate');
			$table->integer('spouse_age');
			$table->string('spouse_hobbies', 100);
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
		Schema::drop('participants');
	}

}
