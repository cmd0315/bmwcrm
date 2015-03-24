@extends('layout.master')


@section('content')
<div class="row" id="personal_info">
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-12">
				{{ Form::open(['class' => 'form-horizontal', 'role' => 'form', 'route' => ['participants.store', e($registration->registration_id)]]) }}
					<div class="row">
						<div class="col-lg-12">
							<h3>{{ isset($pageTitle) ? $pageTitle : '' }}</h3>
							<p>Fields marked withh asterisk (<span class="text-info">*</span>) are mandatory.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="row segment" id="personal">
								<div class="col-lg-12">
									<div class="row">
										<div class="col-lg-12">
											<h5>Title</h5>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											{{ Form::select('personal_salutation', ['' => 'SALUTATION*'] + $salutations, Input::old('personal_salutation'), ['class' => 'form-control']) }}
											@if($errors->has('personal_salutation'))
												<p class="bg-danger">{{ $errors->first('personal_salutation') }}</p>
											@endif
										</div>
										<div class="col-lg-4">
											<input type="text" class="form-control" name="other_personal_salutation" id="other_personal_salutation" placeholder="OTHER SALUTATION"{{ (Input::old('other_personal_salutation')) ? ' value ="' . Input::old('other_personal_salutation') . '"' : '' }}>
											@if($errors->has('other_personal_salutation'))
												<p class="bg-danger">{{ $errors->first('other_personal_salutation') }}</p>
											@endif
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<input type="text" class="form-control" name="first_name" id="first_name" placeholder="FIRST NAME*"{{ (Input::old('first_name')) ? ' value ="' . Input::old('first_name') . '"' : '' }}>
											@if($errors->has('first_name'))
												<p class="bg-danger">{{ $errors->first('first_name') }}</p>
											@endif
										</div>
										<div class="col-lg-4">
											<input type="text" class="form-control" name="middle_initial" id="middle_initial" placeholder="MIDDLE INITIAL"{{ (Input::old('middle_initial')) ? ' value ="' . Input::old('middle_initial') . '"' : '' }}>
											@if($errors->has('middle_initial'))
												<p class="bg-danger">{{ $errors->first('middle_initial') }}</p>
											@endif
										</div>
										<div class="col-lg-4">
											<input type="text" class="form-control" name="last_name" id="last_name" placeholder="LAST NAME*"{{ (Input::old('last_name')) ? ' value ="' . Input::old('last_name') . '"' : '' }}>
											@if($errors->has('last_name'))
												<p class="bg-danger">{{ $errors->first('last_name') }}</p>
											@endif
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<input type="text" class="form-control" name="nickname" id="nickname" placeholder="NICKNAME"{{ (Input::old('nickname')) ? ' value ="' . Input::old('nickname') . '"' : '' }}>
											@if($errors->has('nickname'))
												<p class="bg-danger">{{ $errors->first('nickname') }}</p>
											@endif
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											{{ Form::select('gender', ['' => 'GENDER'] + $genders, Input::old('gender'), ['class' => 'form-control']) }}
											@if($errors->has('gender'))
												<p class="bg-danger">{{ $errors->first('gender') }}</p>
											@endif
										</div>
										<div class="col-lg-4">
											{{ Form::select('status', ['' => 'STATUS'] + $statuses, Input::old('status'), ['class' => 'form-control']) }}
											@if($errors->has('status'))
												<p class="bg-danger">{{ $errors->first('status') }}</p>
											@endif
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<input type="text" class="form-control special-date" id="birthdate" name="birthdate" placeholder="DATE OF BIRTH*"{{ (Input::old('birthdate')) ? ' value ="' . Input::old('birthdate') . '"' : '' }}>
											@if($errors->has('birthdate'))
												<p class="bg-danger">{{ $errors->first('birthdate') }}</p>
											@endif
										</div>
										<div class="col-lg-4">
											<input type="text" class="form-control" name="age" id="age" placeholder="AGE"{{ (Input::old('age')) ? ' value ="' . Input::old('age') . '"' : '' }}>
											@if($errors->has('age'))
												<p class="bg-danger">{{ $errors->first('age') }}</p>
											@endif
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6">
											{{ Form::select('hobbies', ['' => 'HOBBIES/INTERESTS'] + $hobbies, Input::old('hobbies'), ['class' => 'form-control']) }}
											@if($errors->has('hobbies'))
												<p class="bg-danger">{{ $errors->first('hobbies') }}</p>
											@endif
										</div>
										<div class="col-lg-6">
											<input type="text" class="form-control" name="other_hobby" id="other_hobby" placeholder="Others, specify"{{ (Input::old('other_hobby')) ? ' value ="' . Input::old('other_hobby') . '"' : '' }}>
											@if($errors->has('other_hobby'))
												<p class="bg-danger">{{ $errors->first('other_hobby') }}</p>
											@endif
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<input type="text" class="form-control" name="mobile_number" id="mobile_number" placeholder="MOBILE NUMBER"{{ (Input::old('mobile_number')) ? ' value ="' . Input::old('mobile_number') . '"' : '' }}>
											@if($errors->has('mobile_number'))
												<p class="bg-danger">{{ $errors->first('mobile_number') }}</p>
											@endif
										</div>
										<div class="col-lg-8">
											<input type="email" class="form-control" name="email_address" id="email_address" placeholder="EMAIL*"{{ (Input::old('email_address')) ? ' value ="' . Input::old('email_address') . '"' : '' }}>
											@if($errors->has('email_address'))
												<p class="bg-danger">{{ $errors->first('email_address') }}</p>
											@endif
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<input type="text" class="form-control" name="occupation" id="occupation" placeholder="OCCUPATION*"{{ (Input::old('occupation')) ? ' value ="' . Input::old('occupation') . '"' : '' }}>
											@if($errors->has('occupation'))
												<p class="bg-danger">{{ $errors->first('occupation') }}</p>
											@endif
										</div>
										<div class="col-lg-8">
											<input type="text" class="form-control" name="company_name" id="company_name" placeholder="COMPANY NAME"{{ (Input::old('company_name')) ? ' value ="' . Input::old('company_name') . '"' : '' }}>
											@if($errors->has('company_name'))
												<p class="bg-danger">{{ $errors->first('company_name') }}</p>
											@endif
										</div>
									</div>
								</div>
							</div>
							<div class="row segment" id="location-home">
								<div class="col-lg-12">
									<div class="row">
										<div class="col-lg-12">
											<h5>Location <span class="segment-description">- Home</span></h5>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<input type="text" class="form-control" name="home_address1" id="home_address1" placeholder="ADDRESS 1*"{{ (Input::old('home_address1')) ? ' value ="' . Input::old('home_address1') . '"' : '' }}>
											@if($errors->has('home_address1'))
												<p class="bg-danger">{{ $errors->first('home_address1') }}</p>
											@endif
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<input type="text" class="form-control" name="home_address2" id="home_address2" placeholder="ADDRESS 2*"{{ (Input::old('home_address2')) ? ' value ="' . Input::old('home_address2') . '"' : '' }}>
											@if($errors->has('home_address2'))
												<p class="bg-danger">{{ $errors->first('home_address2') }}</p>
											@endif
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											{{ Form::select('home_city', ['' => 'CITY*'] + $cities, Input::old('home_city'), ['class' => 'form-control', 'id' => 'home_city']) }}
											@if($errors->has('home_city'))
												<p class="bg-danger">{{ $errors->first('home_city') }}</p>
											@endif
										</div>
										<div class="col-lg-4">
											{{ Form::select('home_province', ['' => 'PROVINCE'] + $provinces, Input::old('home_province'), ['class' => 'form-control', 'id' => 'home_province']) }}
											@if($errors->has('home_province'))
												<p class="bg-danger">{{ $errors->first('home_province') }}</p>
											@endif
										</div>
										<div class="col-lg-4">
											<input type="text" class="form-control" name="home_zip_code" id="home_zip_code" placeholder="ZIP CODE"{{ (Input::old('home_zip_code')) ? ' value ="' . Input::old('home_zip_code') . '"' : '' }}>
											@if($errors->has('home_zip_code'))
												<p class="bg-danger">{{ $errors->first('home_zip_code') }}</p>
											@endif
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<input type="text" class="form-control" name="home_phone" id="home_phone" placeholder="PHONE NUMBER"{{ (Input::old('home_phone')) ? ' value ="' . Input::old('home_phone') . '"' : '' }}>
											@if($errors->has('home_phone'))
												<p class="bg-danger">{{ $errors->first('home_phone') }}</p>
											@endif
										</div>
									</div>
								</div>
							</div>
							<div class="row segment" id="location-business">
								<div class="col-lg-12">
									<div class="row">
										<div class="col-lg-12">
											<h5>Location <span class="segment-description">- Business</span></h5>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6">
											{{ Form::select('business_industry', ['' => 'INDUSTRY*'] + $industries, Input::old('business_industry'), ['class' => 'form-control']) }}
											@if($errors->has('business_industry'))
												<p class="bg-danger">{{ $errors->first('business_industry') }}</p>
											@endif
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<input type="text" class="form-control" name="business_address1" id="business_address1" placeholder="ADDRESS 1"{{ (Input::old('business_address1')) ? ' value ="' . Input::old('business_address1') . '"' : '' }}>
											@if($errors->has('business_address1'))
												<p class="bg-danger">{{ $errors->first('business_address1') }}</p>
											@endif
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<input type="text" class="form-control" name="business_address2" id="business_address2" placeholder="ADDRESS 2"{{ (Input::old('business_address2')) ? ' value ="' . Input::old('business_address2') . '"' : '' }}>
											@if($errors->has('business_address2'))
												<p class="bg-danger">{{ $errors->first('business_address2') }}</p>
											@endif
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											{{ Form::select('business_city', ['' => 'CITY'] + $cities, Input::old('business_city'), ['class' => 'form-control']) }}
											@if($errors->has('business_city'))
												<p class="bg-danger">{{ $errors->first('business_city') }}</p>
											@endif
										</div>
										<div class="col-lg-4">
											{{ Form::select('business_province', ['' => 'PROVINCE'] + $provinces, Input::old('business_province'), ['class' => 'form-control']) }}
											@if($errors->has('business_province'))
												<p class="bg-danger">{{ $errors->first('business_province') }}</p>
											@endif
										</div>
										<div class="col-lg-4">
											<input type="text" class="form-control" name="business_zip_code" id="business_zip_code" placeholder="ZIP CODE"{{ (Input::old('business_zip_code')) ? ' value ="' . Input::old('business_zip_code') . '"' : '' }}>
											@if($errors->has('business_zip_code'))
												<p class="bg-danger">{{ $errors->first('business_zip_code') }}</p>
											@endif
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<input type="text" class="form-control" name="business_phone" id="business_phone" placeholder="PHONE NUMBER*"{{ (Input::old('business_phone')) ? ' value ="' . Input::old('business_phone') . '"' : '' }}>
											@if($errors->has('business_phone'))
												<p class="bg-danger">{{ $errors->first('business_phone') }}</p>
											@endif
										</div>
									</div>
								</div>
							</div>
							<div class="row segment" id="family">
								<div class="col-lg-12">
									<div class="row">
										<div class="col-lg-12">
											<h5>Family <span class="segment-description">(optional)</span></h5>
											<p>Spouse's Information</p>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											{{ Form::select('spouse_salutation', ['' => 'SALUTATION*'] + $salutations, Input::old('spouse_salutation'), ['class' => 'form-control']) }}
											@if($errors->has('spouse_salutation'))
												<p class="bg-danger">{{ $errors->first('spouse_salutation') }}</p>
											@endif
										</div>
										<div class="col-lg-4">
											<input type="text" class="form-control" name="other_spouse_salutation" id="other_spouse_salutation" placeholder="OTHER SALUTATION"{{ (Input::old('other_spouse_salutation')) ? ' value ="' . Input::old('other_spouse_salutation') . '"' : '' }}>
											@if($errors->has('other_spouse_salutation'))
												<p class="bg-danger">{{ $errors->first('other_spouse_salutation') }}</p>
											@endif
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<input type="text" class="form-control" name="spouse_first_name" id="spouse_first_name" placeholder="FIRST NAME"{{ (Input::old('spouse_first_name')) ? ' value ="' . Input::old('spouse_first_name') . '"' : '' }}>
											@if($errors->has('spouse_first_name'))
												<p class="bg-danger">{{ $errors->first('spouse_first_name') }}</p>
											@endif
										</div>
										<div class="col-lg-4">
											<input type="text" class="form-control" name="spouse_last_name" id="spouse_last_name" placeholder="LAST NAME"{{ (Input::old('spouse_last_name')) ? ' value ="' . Input::old('spouse_last_name') . '"' : '' }}>
											@if($errors->has('spouse_last_name'))
												<p class="bg-danger">{{ $errors->first('spouse_last_name') }}</p>
											@endif
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<input type="text" class="form-control special-date" id="spouse_birthdate" name="spouse_birthdate" placeholder="DATE OF BIRTH*"{{ (Input::old('spouse_birthdate')) ? ' value ="' . Input::old('spouse_birthdate') . '"' : '' }}>
											@if($errors->has('spouse_birthdate'))
												<p class="bg-danger">{{ $errors->first('spouse_birthdate') }}</p>
											@endif
										</div>
										<div class="col-lg-4">
											<input type="text" class="form-control" name="spouse_age" id="spouse_age" placeholder="AGE"{{ (Input::old('spouse_age')) ? ' value ="' . Input::old('spouse_age') . '"' : '' }}>
											@if($errors->has('spouse_age'))
												<p class="bg-danger">{{ $errors->first('spouse_age') }}</p>
											@endif
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6">
											{{ Form::select('spouse_hobbies', ['' => 'HOBBIES/INTERESTS'] + $hobbies, Input::old('spouse_hobbies'), ['class' => 'form-control']) }}
											@if($errors->has('spouse_hobbies'))
												<p class="bg-danger">{{ $errors->first('spouse_hobbies') }}</p>
											@endif
										</div>
										<div class="col-lg-6">
											<input type="text" class="form-control" name="other_spouse_hobby" id="other_spouse_hobby" placeholder="Others, specify"{{ (Input::old('other_spouse_hobby')) ? ' value ="' . Input::old('other_spouse_hobby') . '"' : '' }}>
											@if($errors->has('other_spouse_hobby'))
												<p class="bg-danger">{{ $errors->first('other_spouse_hobby') }}</p>
											@endif
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<input type="submit" class="btn btn-primary pull-right" value="NEXT">
								</div>
							</div>
						</div>
					</div>
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
@stop