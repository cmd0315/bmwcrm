@extends('layout.master')


@section('content')
<div class="row" id="personal_info">
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-12">
				{{ Form::open(['class' => 'form-horizontal', 'role' => 'form']) }}
					<div class="row">
						<div class="col-lg-12">
							<h3>{{ isset($pageTitle) ? $pageTitle : '' }}</h3>
							<p>Fields marked withh asterisk (<span class="text-info">*</span>) are mandatory.</p>
						</div>
					</div>
					<div class="row segment" id="survey">
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-12">
									<div class="row question">
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-12">
													<p>1. Which vehicles do you currently own?<span class="text-info">*</span></p>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6">
													<input type="checkbox" name="vehicles_owned" id="vehicles_owned" value="BMW"> BMW <br/>
													<input type="checkbox" name="vehicles_owned" id="vehicles_owned" value="VOLVO"> VOLVO <br/>
													<input type="checkbox" name="vehicles_owned" id="vehicles_owned" value="CHEVROLET"> CHEVROLET <br/>
													<input type="checkbox" name="vehicles_owned" id="vehicles_owned" value="MITSUBISHI"> MITSUBISHI <br/>
													<input type="checkbox" name="vehicles_owned" id="vehicles_owned" value="NISSAN"> NISSAN <br/>
													<input type="checkbox" name="vehicles_owned" id="vehicles_owned" value="MERCEDES BENZ"> MERCEDES BENZ <br/>
													<input type="checkbox" name="vehicles_owned" id="vehicles_owned" value="PORSCHE"> PORSCHE <br/>
													<input type="checkbox" name="vehicles_owned" id="vehicles_owned" value="TOYOTA"> TOYOTA <br/>
													<input type="checkbox" name="vehicles_owned" id="vehicles_owned" value="KIA"> KIA <br/>
													<input type="checkbox" name="vehicles_owned" id="vehicles_owned" value="AUDI"> AUDI <br/>
												</div>
												<div class="col-lg-6">
													<input type="checkbox" name="vehicles_owned" id="vehicles_owned" value="VOLKSWAGEN"> VOLKSWAGEN <br/>
													<input type="checkbox" name="vehicles_owned" id="vehicles_owned" value="HONDA"> HONDA <br/>
													<input type="checkbox" name="vehicles_owned" id="vehicles_owned" value="MAZDA"> MAZDA <br/>
													<input type="checkbox" name="vehicles_owned" id="vehicles_owned" value="PEUGEOT"> PEUGEOT <br/>
													<input type="checkbox" name="vehicles_owned" id="vehicles_owned" value="LEXUS"> LEXUS <br/>
													<input type="checkbox" name="vehicles_owned" id="vehicles_owned" value="SUBARU"> SUBARU <br/>
													<input type="checkbox" name="vehicles_owned" id="vehicles_owned" value="FORD"> FORD <br/>
													<input type="checkbox" name="vehicles_owned" id="vehicles_owned" value="HYUNDAI"> HYUNDAI <br/>
													<input type="checkbox" name="vehicles_owned" id="vehicles_owned" value="OTHERS"> OTHERS <br/>
													<input type="text" class="form-control" name="other_car" id="other_car">
												</div>
											</div>
										</div>
									</div>
									<div class="row question">
										<div class="col-lg-5">
											<p>2. Which fuel type do you prefer?<span class="text-info">*</span></p>
										</div>
										<div class="col-lg-4">
											<select class="form-control" name="fuel" id="fuel">
												<option value="Diesel">Diesel</option>
												<option value="Gasoline">Gasoline</option>
											</select>
											@if($errors->has('personal_salutation'))
												<p class="bg-danger">{{ $errors->first('personal_salutation') }}</p>
											@endif
										</div>
									</div>
									<div class="row question">
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-12">
													<p>3. Please check all the car body types that you currently own. <span class="text-info">*</span></p>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6">
													<input type="checkbox" name="car_body_type" id="car_body_type" value="SEDAN"> SEDAN <br/>
													<input type="checkbox" name="car_body_type" id="car_body_type" value="SUV"> SUV <br/>
													<input type="checkbox" name="car_body_type" id="car_body_type" value="AUV"> AUV <br/>
													<input type="checkbox" name="car_body_type" id="car_body_type" value="HATCHBACK"> HATCHBACK <br/>
													<input type="checkbox" name="car_body_type" id="car_body_type" value="MULTI-PURPOSE VEHICLE"> MULTI-PURPOSE VEHICLE <br/>
												</div>
												<div class="col-lg-6">
													<input type="checkbox" name="car_body_type" id="car_body_type" value="VAN"> VAN <br/>
													<input type="checkbox" name="car_body_type" id="car_body_type" value="COUPE"> COUPE <br/>
													<input type="checkbox" name="car_body_type" id="car_body_type" value="OTHERS"> OTHERS <br/>
												<input type="text" class="form-control" name="other_body_type" id="other_body_type">
												</div>
											</div>
										</div>
									</div>
									<div class="row question">
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-12">
													<p>4. Please check all the colors that correspond to cars you currently own. <span class="text-info">*</span></p>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6">
													<input type="checkbox" name="car_colors" id="car_colors" value="WHITE"> WHITE <br/>
													<input type="checkbox" name="car_colors" id="car_colors" value="BLUE"> BLUE <br/>
													<input type="checkbox" name="car_colors" id="car_colors" value="YELLOW"> YELLOW <br/>
													<input type="checkbox" name="car_colors" id="car_colors" value="BLACK"> BLACK <br/>
													<input type="checkbox" name="car_colors" id="car_colors" value="RED"> RED <br/>
													<input type="checkbox" name="car_colors" id="car_colors" value="GREEN"> GREEN <br/>
													<input type="checkbox" name="car_colors" id="car_colors" value="SILVER"> SILVER <br/>
												</div>
												<div class="col-lg-6">
													<input type="checkbox" name="car_colors" id="car_colors" value="BROWN"> BROWN <br/>
													<input type="checkbox" name="car_colors" id="car_colors" value="PINK"> PINK <br/>
													<input type="checkbox" name="car_colors" id="car_colors" value="GRAY"> GRAY <br/>
													<input type="checkbox" name="car_colors" id="car_colors" value="OTHERS"> OTHERS <br/>
												<input type="text" class="form-control" name="other_car_colors" id="other_car_colors">
												</div>
											</div>
										</div>
									</div>
									<div class="row question">
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-12">
													<p>5. What color of upholstery do you prefer in a car? <span class="text-info">*</span></p>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6">
													<input type="checkbox" name="upholstery_color" id="upholstery_color" value="LIGHT (White, beige, light brown)"> LIGHT (White, beige, light brown) <br/>
													<input type="checkbox" name="upholstery_color" id="upholstery_color" value="DARK (Black, gray, dark brown)"> DARK (Black, gray, dark brown) <br/>
												</div>
												<div class="col-lg-6">
													<input type="checkbox" name="upholstery_color" id="upholstery_color" value="COMBINATION"> COMBINATION <br/>
													<input type="checkbox" name="upholstery_color" id="upholstery_color" value="NOTHING IN PARTICULAR"> NOTHING IN PARTICULAR <br/>
												</div>
											</div>
										</div>
									</div>
									<div class="row question">
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-12">
													<p>6. Rank the following criteria in order of performance when purchasing a vehicle (1 being the highest) <span class="text-info">*</span></p>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6">
													<div class="col-xs-2">
														<input type="text" class="form-control" name="ranking_exterior_design" id="ranking_exterior_design">
													</div>
													<div class="col-xs-10">
														EXTERIOR DESIGN
													</div>
												</div>
												<div class="col-lg-6">
													<input type="checkbox" name="upholstery_color" id="upholstery_color" value="COMBINATION"> COMBINATION <br/>
													<input type="checkbox" name="upholstery_color" id="upholstery_color" value="NOTHING IN PARTICULAR"> NOTHING IN PARTICULAR <br/>
												</div>
											</div>
										</div>
									</div>
									<div class="row question">
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-12">
													<p>7. What other cars did you consider before buying your current BMW? <span class="text-info">*</span></p>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6">
													<input type="checkbox" name="car_choices" id="car_choices" value="HYUNDAI"> HYUNDAI <br/>
													<input type="checkbox" name="car_choices" id="car_choices" value="VOLVO"> VOLVO <br/>
													<input type="checkbox" name="car_choices" id="car_choices" value="CHEVROLET"> CHEVROLET <br/>
													<input type="checkbox" name="car_choices" id="car_choices" value="MITSUBISHI"> MITSUBISHI <br/>
													<input type="checkbox" name="car_choices" id="car_choices" value="NISSAN"> NISSAN <br/>
													<input type="checkbox" name="car_choices" id="car_choices" value="MERCEDES BENZ"> MERCEDES BENZ <br/>
													<input type="checkbox" name="car_choices" id="car_choices" value="PORSCHE"> PORSCHE <br/>
													<input type="checkbox" name="car_choices" id="car_choices" value="TOYOTA"> TOYOTA <br/>
													<input type="checkbox" name="car_choices" id="car_choices" value="KIA"> KIA <br/>
													<input type="checkbox" name="car_choices" id="car_choices" value="AUDI"> AUDI <br/>
												</div>
												<div class="col-lg-6">
													<input type="checkbox" name="car_choices" id="car_choices" value="VOLKSWAGEN"> VOLKSWAGEN <br/>
													<input type="checkbox" name="car_choices" id="car_choices" value="HONDA"> HONDA <br/>
													<input type="checkbox" name="car_choices" id="car_choices" value="MAZDA"> MAZDA <br/>
													<input type="checkbox" name="car_choices" id="car_choices" value="PEUGEOT"> PEUGEOT <br/>
													<input type="checkbox" name="car_choices" id="car_choices" value="LEXUS"> LEXUS <br/>
													<input type="checkbox" name="car_choices" id="car_choices" value="SUBARU"> SUBARU <br/>
													<input type="checkbox" name="car_choices" id="car_choices" value="FORD"> FORD <br/>
													<input type="checkbox" name="car_choices" id="car_choices" value="OTHERS"> OTHERS <br/>
													<input type="text" class="form-control" name="other_car_choices" id="other_car_choices">
												</div>
											</div>
										</div>
									</div>
									<div class="row question">
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-12">
													<p>8. What made you decide to buy a BMW? <span class="text-info">*</span></p>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6">
													<input type="checkbox" name="why_buy_a_bmw" id="why_buy_a_bmw" value="EXTERIOR DESIGN"> EXTERIOR DESIGN <br/>
													<input type="checkbox" name="why_buy_a_bmw" id="why_buy_a_bmw" value="INTERIOR DESIGN"> INTERIOR DESIGN <br/>
													<input type="checkbox" name="why_buy_a_bmw" id="why_buy_a_bmw" value="ENGINE POWER"> ENGINE POWER <br/>
													<input type="checkbox" name="why_buy_a_bmw" id="why_buy_a_bmw" value="HANDLING"> HANDLING <br/>
													<input type="checkbox" name="why_buy_a_bmw" id="why_buy_a_bmw" value="COMFORT/LUXURY"> COMFORT/LUXURY <br/>
													<input type="checkbox" name="why_buy_a_bmw" id="why_buy_a_bmw" value="TECHNOLOGY"> TECHNOLOGY<br/>
												</div>
												<div class="col-lg-6">
													<input type="checkbox" name="why_buy_a_bmw" id="why_buy_a_bmw" value="SAFETY"> SAFETY <br/>
													<input type="checkbox" name="why_buy_a_bmw" id="why_buy_a_bmw" value="BRAND"> BRAND <br/>
													<input type="checkbox" name="why_buy_a_bmw" id="why_buy_a_bmw" value="FUEL ECONOMY"> FUEL ECONOMY <br/>
													<input type="checkbox" name="why_buy_a_bmw" id="why_buy_a_bmw" value="PRICING"> PRICING <br/>
													<input type="checkbox" name="why_buy_a_bmw" id="why_buy_a_bmw" value="MAINTENANCE COST"> MAINTENANCE COST <br/>
													<input type="checkbox" name="why_buy_a_bmw" id="why_buy_a_bmw" value="OTHERS"> OTHERS <br/>
													<input type="text" class="form-control" name="other_car_choices" id="other_car_choices">
												</div>
											</div>
										</div>
									</div>
									<div class="row question">
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-12">
													<p>9. Would you like to receive a correspondence related to the latest information about BMW? <span class="text-info">*</span></p>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-3">
													<select class="form-control" name="receive_correspondence" id="receive_correspondence">
														<option value="YES">YES</option>
														<option value="NO">NO</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="row question">
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-12">
													<p>10. Would you like to be notified of BMW Promotions and Events? <span class="text-info">*</span></p>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-3">
													<select class="form-control" name="notify_bmw" id="notify_bmw">
														<option value="YES">YES</option>
														<option value="NO">NO</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<input type="submit" class="btn btn-primary pull-right" value="SUBMIT">
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