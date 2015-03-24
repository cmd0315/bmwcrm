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
			$table->string('registration_id', 100);
			$table->string('personal_salutation', 50);
			$table->string('other_personal_salutation', 50);
			$table->string('first_name', 250);
			$table->string('middle_initial', 5);
			$table->string('last_name', 250);
			$table->string('nickname', 30);
			$table->string('gender', 10);
			$table->string('status', 100);
			$table->date('birthdate');
			$table->integer('age');
			$table->string('hobbies', 250);
			$table->string('other_hobby', 250);
			$table->string('mobile_number', 20);
			$table->string('email_address', 100);
			$table->string('occupation', 250);
			$table->string('company_name', 250);
			$table->string('home_address1', 250);
			$table->string('home_address2', 250);
			$table->string('home_city', 250);
			$table->string('home_province', 250);
			$table->string('home_zip_code', 30);
			$table->string('home_phone', 20);
			$table->string('business_industry', 250);
			$table->string('business_address1', 250);
			$table->string('business_address2', 250);
			$table->string('business_city', 250);
			$table->string('business_province', 250);
			$table->string('business_zip_code', 30);
			$table->string('business_phone', 20);
			$table->string('spouse_salutation', 50);
			$table->string('other_spouse_salutation', 50);
			$table->string('spouse_first_name', 250);
			$table->string('spouse_last_name', 250);
			$table->date('spouse_birthdate');
			$table->integer('spouse_age');
			$table->string('spouse_hobbies', 250);
			$table->string('other_spouse_hobby', 250);
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
