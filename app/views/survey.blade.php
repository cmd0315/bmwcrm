@extends('layout.master')


@section('content')
<div class="row" id="survey">
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-12">
				{{ Form::open(['class' => 'form-horizontal', 'role' => 'form', 'route' => ['survey.store', e($registration_id)]]) }}
					<div class="row">
						<div class="col-lg-12">
							<h3>{{ isset($pageTitle) ? $pageTitle : '' }}</h3>
							<p>Fields marked withh asterisk (<span class="text-info">*</span>) are mandatory.</p>
						</div>
					</div>
					<div class="row segment">
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-12">
									<div class="row question">
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-12">
													<p>1. Which vehicles do you currently own?<span class="text-info">*</span></p>
													@if($errors->has('vehicles_owned'))
														<p class="bg-danger">{{ $errors->first('vehicles_owned') }}</p>
													@endif
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6">
													<div class="checkbox">
														<input type="checkbox" name="vehicles_owned[]" id="vehicles_owned1" value="BMW">
														<label for="vehicles_owned1">BMW</label><br>
														<input type="checkbox" name="vehicles_owned[]" id="vehicles_owned2" value="VOLVO">
														<label for="vehicles_owned2">VOLVO</label><br>
														<input type="checkbox" name="vehicles_owned[]" id="vehicles_owned3" value="CHEVROLET">
														<label for="vehicles_owned3">CHEVROLET</label><br>
														<input type="checkbox" name="vehicles_owned[]" id="vehicles_owned4" value="MITSUBISHI">
														<label for="vehicles_owned4">MITSUBISHI</label><br>
														<input type="checkbox" name="vehicles_owned[]" id="vehicles_owned5" value="NISSAN">
														<label for="vehicles_owned5">NISSAN</label><br>
														<input type="checkbox" name="vehicles_owned[]" id="vehicles_owned6" value="MERCEDES BENZ">
														<label for="vehicles_owned6">MERCEDES BENZ</label><br>
														<input type="checkbox" name="vehicles_owned[]" id="vehicles_owned7" value="PORSCHE">
														<label for="vehicles_owned7">PORSCHE</label><br>
														<input type="checkbox" name="vehicles_owned[]" id="vehicles_owned8" value="TOYOTA">
														<label for="vehicles_owned8">TOYOTA</label><br>
														<input type="checkbox" name="vehicles_owned[]" id="vehicles_owned9" value="KIA">
														<label for="vehicles_owned9">KIA</label><br>
														<input type="checkbox" name="vehicles_owned[]" id="vehicles_owned10" value="AUDI">
														<label for="vehicles_owned10">AUDI</label><br>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="checkbox">
														<input type="checkbox" name="vehicles_owned[]" id="vehicles_owned11" value="VOLKSWAGEN">
														<label for="vehicles_owned11">VOLKSWAGEN</label><br>
														<input type="checkbox" name="vehicles_owned[]" id="vehicles_owned12" value="HONDA">
														<label for="vehicles_owned12">HONDA</label><br>
														<input type="checkbox" name="vehicles_owned[]" id="vehicles_owned13" value="MAZDA">
														<label for="vehicles_owned13">MAZDA</label><br>
														<input type="checkbox" name="vehicles_owned[]" id="vehicles_owned14" value="PEUGEOT">
														<label for="vehicles_owned14">PEUGEOT</label><br>
														<input type="checkbox" name="vehicles_owned[]" id="vehicles_owned15" value="LEXUS">
														<label for="vehicles_owned15">LEXUS</label><br>
														<input type="checkbox" name="vehicles_owned[]" id="vehicles_owned16" value="SUBARU">
														<label for="vehicles_owned16">SUBARU</label><br>
														<input type="checkbox" name="vehicles_owned[]" id="vehicles_owned17" value="FORD">
														<label for="vehicles_owned17">FORD</label><br>
														<input type="checkbox" name="vehicles_owned[]" id="vehicles_owned18" value="HYUNDAI">
														<label for="vehicles_owned18">HYUNDAI</label><br>
														<input type="checkbox" name="vehicles_owned[]" id="vehicles_owned19" value="checked">
														<label for="vehicles_owned19">OTHERS</label><br>
													</div>
													<input type="text" class="form-control" name="other_vehicles_owned" id="other_vehicles_owned" placeholder="OTHER VEHICLES OWNED">
													@if($errors->has('other_vehicles_owned'))
														<p class="bg-danger">{{ $errors->first('other_vehicles_owned') }}</p>
													@endif
												</div>
											</div>
										</div>
									</div>
									<div class="row question">
										<div class="col-lg-5">
											<p>2. Which fuel type do you prefer?<span class="text-info">*</span></p>
										</div>
										<div class="col-lg-4">
											{{ Form::select('fuel', ['' => 'FUEL'] + $fuels, Input::old('fuel'), ['class' => 'form-control']) }}
											@if($errors->has('fuel'))
												<p class="bg-danger">{{ $errors->first('fuel') }}</p>
											@endif
										</div>
									</div>
									<div class="row question">
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-12">
													<p>3. Please check all the car body types that you currently own. <span class="text-info">*</span></p>
													@if($errors->has('car_body_type'))
														<p class="bg-danger">{{ $errors->first('car_body_type') }}</p>
													@endif
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6">
													<div class="checkbox">
														<input type="checkbox" name="car_body_type[]" id="car_body_type1" value="SEDAN">
														<label for="car_body_type1">SEDAN</label><br>
														<input type="checkbox" name="car_body_type[]" id="car_body_type2" value="SUV">
														<label for="car_body_type2">SUV</label><br>
														<input type="checkbox" name="car_body_type[]" id="car_body_type3" value="AUV">
														<label for="car_body_type3">AUV</label><br>
														<input type="checkbox" name="car_body_type[]" id="car_body_type4" value="HATCHBACK">
														<label for="car_body_type4">HATCHBACK</label><br>
														<input type="checkbox" name="car_body_type[]" id="car_body_type5" value="MULTI-PURPOSE VEHICLE">
														<label for="car_body_type5">MULTI-PURPOSE VEHICLE</label><br>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="checkbox">
														<input type="checkbox" name="car_body_type[]" id="car_body_type6" value="VAN">
														<label for="car_body_type6">VAN</label><br>
														<input type="checkbox" name="car_body_type[]" id="car_body_type7" value="COUPE">
														<label for="car_body_type7">COUPE</label><br>
														<input type="checkbox" name="car_body_type[]" id="car_body_type8" value="checked">
														<label for="car_body_type8">OTHERS</label><br>
													</div>
													<input type="text" class="form-control" name="other_car_body_type" id="other_car_body_type" placeholder="OTHER CAR BODY TYPE">
													@if($errors->has('other_car_body_type'))
														<p class="bg-danger">{{ $errors->first('other_car_body_type') }}</p>
													@endif
												</div>
											</div>
										</div>
									</div>
									<div class="row question">
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-12">
													<p>4. Please check all the colors that correspond to cars you currently own. <span class="text-info">*</span></p>
													@if($errors->has('car_colors'))
														<p class="bg-danger">{{ $errors->first('car_colors') }}</p>
													@endif
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6">
													<div class="checkbox">
														<input type="checkbox" name="car_colors[]" id="car_colors1" value="WHITE">
														<label for="car_colors1">WHITE</label><br>
														<input type="checkbox" name="car_colors[]" id="car_colors2" value="BLUE">
														<label for="car_colors2">BLUE</label><br>
														<input type="checkbox" name="car_colors[]" id="car_colors3" value="YELLOW">
														<label for="car_colors3">YELLOW</label><br>
														<input type="checkbox" name="car_colors[]" id="car_colors4" value="BLACK">
														<label for="car_colors4">BLACK</label><br>
														<input type="checkbox" name="car_colors[]" id="car_colors5" value="RED">
														<label for="car_colors5">RED</label><br>
														<input type="checkbox" name="car_colors[]" id="car_colors6" value="GREEN">
														<label for="car_colors6">GREEN</label><br>
														<input type="checkbox" name="car_colors[]" id="car_colors7" value="SILVER">
														<label for="car_colors7">SILVER</label><br>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="checkbox">
														<input type="checkbox" name="car_colors[]" id="car_colors8" value="BROWN">
														<label for="car_colors8">BROWN</label><br>
														<input type="checkbox" name="car_colors[]" id="car_colors9" value="PINK">
														<label for="car_colors9">PINK</label><br>
														<input type="checkbox" name="car_colors[]" id="car_colors10" value="GRAY">
														<label for="car_colors10">GRAY</label><br>
														<input type="checkbox" name="car_colors[]" id="car_colors11" value="checked">
														<label for="car_colors11">OTHERS</label><br>
													</div>
													<input type="text" class="form-control" name="other_car_color" id="other_car_color" placeholder="OTHER CAR COLOR">
													@if($errors->has('other_car_color'))
														<p class="bg-danger">{{ $errors->first('other_car_color') }}</p>
													@endif
												</div>
											</div>
										</div>
									</div>
									<div class="row question">
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-12">
													<p>5. What color of upholstery do you prefer in a car? <span class="text-info">*</span></p>
													@if($errors->has('upholstery_color'))
														<p class="bg-danger">{{ $errors->first('upholstery_color') }}</p>
													@endif
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6">
													<div class="checkbox">
														<input type="checkbox" name="upholstery_color" id="upholstery_color1" value="LIGHT (White, beige, light brown)">
														<label for="upholstery_color1">LIGHT (White, beige, light brown)</label><br>
														<input type="checkbox" name="upholstery_color" id="upholstery_color2" value="DARK (Black, gray, dark brown)">
														<label for="upholstery_color2">DARK (Black, gray, dark brown)</label><br>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="checkbox">
														<input type="checkbox" name="upholstery_color" id="upholstery_color3" value="COMBINATION">
														<label for="upholstery_color3">COMBINATION</label><br>
														<input type="checkbox" name="upholstery_color" id="upholstery_color4" value="NOTHING IN PARTICULAR">
														<label for="upholstery_color4">NOTHING IN PARTICULAR</label><br>
													</div>
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
													<input type="text" class="input-xs" name="rating_exterior_design" id="rating_exterior_design">
													<label for="rating_exterior_design">EXTERIOR DESIGN</label><br>
													@if($errors->has('rating_exterior_design'))
														<p class="bg-danger">{{ $errors->first('rating_exterior_design') }}</p>
													@endif
													<input type="text" class="input-xs" name="rating_interior_design" id="rating_interior_design">
													<label for="rating_interior_design">INTERIOR DESIGN</label><br>
													@if($errors->has('rating_interior_design'))
														<p class="bg-danger">{{ $errors->first('rating_interior_design') }}</p>
													@endif
													<input type="text" class="input-xs" name="rating_engine_power" id="rating_engine_power">
													<label for="rating_engine_power">ENGINE POWER</label><br>
													@if($errors->has('rating_engine_power'))
														<p class="bg-danger">{{ $errors->first('rating_engine_power') }}</p>
													@endif
													<input type="text" class="input-xs" name="rating_handling" id="rating_handling">
													<label for="rating_handling">HANDLING</label><br>
													@if($errors->has('rating_handling'))
														<p class="bg-danger">{{ $errors->first('rating_handling') }}</p>
													@endif
													<input type="text" class="input-xs" name="rating_comfort_luxury" id="rating_comfort_luxury">
													<label for="rating_comfort_luxury">COMFORT/LUXURY</label><br>
													@if($errors->has('rating_comfort_luxury'))
														<p class="bg-danger">{{ $errors->first('rating_comfort_luxury') }}</p>
													@endif
													<input type="text" class="input-xs" name="rating_technology" id="rating_technology">
													<label for="rating_technology">TECHNOLOGY</label><br>
													@if($errors->has('rating_technology'))
														<p class="bg-danger">{{ $errors->first('rating_technology') }}</p>
													@endif
													<input type="text" class="input-xs" name="rating_safety" id="rating_safety">
													<label for="rating_safety">SAFETY</label><br>
													@if($errors->has('rating_safety'))
														<p class="bg-danger">{{ $errors->first('rating_safety') }}</p>
													@endif
												</div>
												<div class="col-lg-6">
													<input type="text" class="input-xs" name="rating_brand" id="rating_brand">
													<label for="rating_brand">BRAND</label><br>
													@if($errors->has('rating_brand'))
														<p class="bg-danger">{{ $errors->first('rating_brand') }}</p>
													@endif
													<input type="text" class="input-xs" name="rating_fuel_economy" id="rating_fuel_economy">
													<label for="rating_fuel_economy">FUEL ECONOMY</label><br>
													@if($errors->has('rating_fuel_economy'))
														<p class="bg-danger">{{ $errors->first('rating_fuel_economy') }}</p>
													@endif
													<input type="text" class="input-xs" name="rating_pricing" id="rating_fuel_pricing">
													<label for="rating_pricing">PRICING</label><br>
													@if($errors->has('rating_pricing'))
														<p class="bg-danger">{{ $errors->first('rating_pricing') }}</p>
													@endif
													<input type="text" class="input-xs" name="rating_maintenance_cost" id="rating_maintenance_cost">
													<label for="rating_maintenance_cost">MAINTENANCE COST</label><br>
													@if($errors->has('rating_maintenance_cost'))
														<p class="bg-danger">{{ $errors->first('rating_maintenance_cost') }}</p>
													@endif
													<input type="text" class="input-xs" name="rating_others" id="rating_others">
													<label for="rating_others">OTHERS</label><br>
													@if($errors->has('rating_others'))
														<p class="bg-danger">{{ $errors->first('rating_others') }}</p>
													@endif
													<input type="text" class="form-control" name="other_rating" id="other_rating" placeholder="OTHER RATING">
													@if($errors->has('other_rating'))
														<p class="bg-danger">{{ $errors->first('other_rating') }}</p>
													@endif
												</div>
											</div>
										</div>
									</div>
									<div class="row question">
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-12">
													<p>7. What other cars did you consider before buying your current BMW? <span class="text-info">*</span></p>
													@if($errors->has('car_choices'))
														<p class="bg-danger">{{ $errors->first('car_choices') }}</p>
													@endif
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6">
													<div class="checkbox">
														<input type="checkbox" name="car_choices[]" id="car_choices1" value="HYUNDAI">
														<label for="car_choices1">HYUNDAI</label><br>
														<input type="checkbox" name="car_choices[]" id="car_choices2" value="VOLVO">
														<label for="car_choices2">VOLVO</label><br>
														<input type="checkbox" name="car_choices[]" id="car_choices3" value="CHEVROLET">
														<label for="car_choices3">CHEVROLET</label><br>
														<input type="checkbox" name="car_choices[]" id="car_choices4" value="MITSUBISHI">
														<label for="car_choices4">MITSUBISHI</label><br>
														<input type="checkbox" name="car_choices[]" id="car_choices5" value="NISSAN">
														<label for="car_choices5">NISSAN</label><br>
														<input type="checkbox" name="car_choices[]" id="car_choices6" value="MERCEDES BENZ">
														<label for="car_choices6">MERCEDES BENZ</label><br>
														<input type="checkbox" name="car_choices[]" id="car_choices7" value="PORSCHE">
														<label for="car_choices7">PORSCHE</label><br>
														<input type="checkbox" name="car_choices[]" id="car_choices8" value="TOYOTA">
														<label for="car_choices8">TOYOTA</label><br>
														<input type="checkbox" name="car_choices[]" id="car_choices9" value="KIA">
														<label for="car_choices9">KIA</label><br>
														<input type="checkbox" name="car_choices[]" id="car_choices10" value="AUDI">
														<label for="car_choices10">AUDI</label><br>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="checkbox">
														<input type="checkbox" name="car_choices[]" id="car_choices11" value="VOLKSWAGEN">
														<label for="car_choices11">VOLKSWAGEN</label><br>
														<input type="checkbox" name="car_choices[]" id="car_choices12" value="HONDA">
														<label for="car_choices12">HONDA</label><br>
														<input type="checkbox" name="car_choices[]" id="car_choices13" value="MAZDA">
														<label for="car_choices13">MAZDA</label><br>
														<input type="checkbox" name="car_choices[]" id="car_choices14" value="PEUGEOT">
														<label for="car_choices14">PEUGEOT</label><br>
														<input type="checkbox" name="car_choices[]" id="car_choices15" value="LEXUS">
														<label for="car_choices15">LEXUS</label><br>
														<input type="checkbox" name="car_choices[]" id="car_choices16" value="SUBARU">
														<label for="car_choices16">SUBARU</label><br>
														<input type="checkbox" name="car_choices[]" id="car_choices17" value="FORD">
														<label for="car_choices17">FORD</label><br>
														<input type="checkbox" name="car_choices[]" id="car_choices18" value="checked">
														<label for="car_choices18">OTHERS</label><br>
													</div>
													<input type="text" class="form-control" name="other_car_choice" id="other_car_choice" placeholder="OTHER CAR CHOICE">
													@if($errors->has('other_car_choice'))
														<p class="bg-danger">{{ $errors->first('other_car_choice') }}</p>
													@endif
												</div>
											</div>
										</div>
									</div>
									<div class="row question">
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-12">
													<p>8. What made you decide to buy a BMW? <span class="text-info">*</span></p>
													@if($errors->has('why_buy_a_bmw'))
														<p class="bg-danger">{{ $errors->first('why_buy_a_bmw') }}</p>
													@endif
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6">
													<div class="checkbox">
														<input type="checkbox" name="why_buy_a_bmw[]" id="why_buy_a_bmw1" value="EXTERIOR DESIGN">
														<label for="why_buy_a_bmw1">EXTERIOR DESIGN</label><br>
														<input type="checkbox" name="why_buy_a_bmw[]" id="why_buy_a_bmw2" value="INTERIOR DESIGN">
														<label for="why_buy_a_bmw2">INTERIOR DESIGN</label><br>
														<input type="checkbox" name="why_buy_a_bmw[]" id="why_buy_a_bmw3" value="ENGINE POWER">
														<label for="why_buy_a_bmw3">ENGINE POWER</label><br>
														<input type="checkbox" name="why_buy_a_bmw[]" id="why_buy_a_bmw4" value="HANDLING">
														<label for="why_buy_a_bmw4">HANDLING</label><br>
														<input type="checkbox" name="why_buy_a_bmw[]" id="why_buy_a_bmw5" value="COMFORT/LUXURY">
														<label for="why_buy_a_bmw5">COMFORT/LUXURY</label><br>
														<input type="checkbox" name="why_buy_a_bmw[]" id="why_buy_a_bmw6" value="TECHNOLOGY">
														<label for="why_buy_a_bmw6">TECHNOLOGY</label><br>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="checkbox">
														<input type="checkbox" name="why_buy_a_bmw[]" id="why_buy_a_bmw7" value="SAFETY">
														<label for="why_buy_a_bmw7">SAFETY</label><br>
														<input type="checkbox" name="why_buy_a_bmw[]" id="why_buy_a_bmw8" value="BRAND">
														<label for="why_buy_a_bmw8">BRAND</label><br>
														<input type="checkbox" name="why_buy_a_bmw[]" id="why_buy_a_bmw9" value="FUEL ECONOMY">
														<label for="why_buy_a_bmw9">FUEL ECONOMY</label><br>
														<input type="checkbox" name="why_buy_a_bmw[]" id="why_buy_a_bmw10" value="PRICING">
														<label for="why_buy_a_bmw10">PRICING</label><br>
														<input type="checkbox" name="why_buy_a_bmw[]" id="why_buy_a_bmw11" value="MAINTENANCE COST">
														<label for="why_buy_a_bmw11">MAINTENANCE COST</label><br>
														<input type="checkbox" name="why_buy_a_bmw[]" id="why_buy_a_bmw12" value="checked">
														<label for="why_buy_a_bmw12">OTHERS</label><br>
													</div>
													<input type="text" class="form-control" name="other_why_buy_a_bmw" id="other_why_buy_a_bmw" placeholder="OTHER WHY BUY A BMW">
													@if($errors->has('other_why_buy_a_bmw'))
														<p class="bg-danger">{{ $errors->first('other_why_buy_a_bmw') }}</p>
													@endif
												</div>
											</div>
										</div>
									</div>
									<div class="row question">
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-12">
													<p>9. Would you like to receive a correspondence related to the latest information about BMW? <span class="text-info">*</span></p>
													@if($errors->has('receive_correspondence'))
														<p class="bg-danger">{{ $errors->first('receive_correspondence') }}</p>
													@endif
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
													@if($errors->has('notify_bmw'))
														<p class="bg-danger">{{ $errors->first('notify_bmw') }}</p>
													@endif
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