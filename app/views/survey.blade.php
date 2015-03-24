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
												<?php $counter = 0; ?>
												@foreach($vehicles_owned as $vehicle_owned)
													@if( $counter===0 or $counter==10)
														<div class="col-lg-6"><div class="checkbox">
													@endif
													<input type="checkbox" name="vehicles_owned[]" id="{{ 'vehicle_owned' . $counter}}" value="{{ $vehicle_owned }}" <?php if(Input::old('vehicles_owned')): if(in_array($vehicle_owned, Input::old('vehicles_owned'))): echo ' checked'; endif; endif;?>>
													<label for="{{ 'vehicle_owned' . $counter}}">{{ $vehicle_owned }}</label><br>

													@if($counter!==0 and ($counter==9 or $counter==18))
														</div>
															@if($counter==18)
																<input type="text" class="form-control" name="other_vehicles_owned" id="other_vehicles_owned" placeholder="OTHER VEHICLE OWNED"{{ (Input::old('other_vehicles_owned')) ? ' value ="' . Input::old('other_vehicles_owned') . '"' : 'hi' . $counter }}>
																@if($errors->has('other_vehicles_owned'))
																	<p class="bg-danger">{{ $errors->first('other_vehicles_owned') }}</p>
																@endif
															@endif
														</div>
													@endif
													<?php $counter++; ?>
												@endforeach
											</div>
										</div>
									</div>
									<div class="row question">
										<div class="col-lg-5">
											<p>2. Which fuel type do you prefer?<span class="text-info">*</span></p>
										</div>
										<div class="col-lg-4">
											{{ Form::select('fuel', ['' => 'FUEL*'] + $fuels, Input::old('fuel'), ['class' => 'form-control']) }}
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
												<?php $counter = 0; ?>
												@foreach($car_body_types as $car_body_type)
													@if( $counter===0 or $counter==5)
														<div class="col-lg-6"><div class="checkbox">
													@endif
													<input type="checkbox" name="car_body_type[]" id="{{ 'car_body_type' . $counter}}" value="{{ $car_body_type }}" <?php if(Input::old('car_body_type')): if(in_array($car_body_type, Input::old('car_body_type'))): echo ' checked'; endif; endif;?>>
													<label for="{{ 'car_body_type' . $counter}}">{{ $car_body_type }}</label><br>

													@if($counter!==0 and ($counter==4 or $counter==7))
														</div>
															@if($counter==7)
																<input type="text" class="form-control" name="other_car_body_type" id="other_car_body_type" placeholder="OTHER CAR BODY TYPE"{{ (Input::old('other_car_body_type')) ? ' value ="' . Input::old('other_car_body_type') . '"' : '' }}>
																@if($errors->has('other_car_body_type'))
																	<p class="bg-danger">{{ $errors->first('other_car_body_type') }}</p>
																@endif
															@endif
														</div>
													@endif
													<?php $counter++; ?>
												@endforeach
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
												<?php $counter = 0; ?>
												@foreach($car_colors as $car_color)
													@if( $counter===0 or $counter==7)
														<div class="col-lg-6"><div class="checkbox">
													@endif
													<input type="checkbox" name="car_colors[]" id="{{ 'car_color' . $counter}}" value="{{ $car_color }}" <?php if(Input::old('car_colors')): if(in_array($car_color, Input::old('car_colors'))): echo ' checked'; endif; endif;?>>
													<label for="{{ 'car_color' . $counter}}">{{ $car_color }}</label><br>

													@if($counter!==0 and ($counter==6 or $counter==10))
														</div>
															@if($counter==10)
																<input type="text" class="form-control" name="other_car_color" id="other_car_color" placeholder="OTHER CAR COLOR"{{ (Input::old('other_car_color')) ? ' value ="' . Input::old('other_car_color') . '"' : '' }}>
																@if($errors->has('other_car_color'))
																	<p class="bg-danger">{{ $errors->first('other_car_color') }}</p>
																@endif
															@endif
														</div>
													@endif
													<?php $counter++; ?>
												@endforeach
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
												<?php $counter = 0; ?>
												@foreach($upholstery_colors as $upholstery_color)
													@if( $counter===0 or $counter==2)
														<div class="col-lg-6"><div class="radio">
													@endif
													<input type="radio" name="upholstery_color" id="{{ 'upholstery_color' . $counter}}" value="{{ $upholstery_color }}" <?php if(Input::old('upholstery_color')): if(strcasecmp(Input::old('upholstery_color'), $upholstery_color) === 0): echo 'checked'; endif; endif; ?>>
													<label for="{{ 'upholstery_color' . $counter}}">{{ $upholstery_color }}</label><br>

													@if($counter!==0 and ($counter==1 or $counter==3))
														</div></div>
													@endif
													<?php $counter++; ?>
												@endforeach
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
													<input type="text" class="input-xs" name="rating_exterior_design" id="rating_exterior_design" maxlength="2"{{ (Input::old('rating_exterior_design')) ? ' value ="' . Input::old('rating_exterior_design') . '"' : '' }}>
													<label for="rating_exterior_design">EXTERIOR DESIGN</label><br>
													@if($errors->has('rating_exterior_design'))
														<p class="bg-danger">{{ $errors->first('rating_exterior_design') }}</p>
													@endif
													<input type="text" class="input-xs" name="rating_interior_design" id="rating_interior_design" maxlength="2"{{ (Input::old('rating_interior_design')) ? ' value ="' . Input::old('rating_interior_design') . '"' : '' }}>
													<label for="rating_interior_design">INTERIOR DESIGN</label><br>
													@if($errors->has('rating_interior_design'))
														<p class="bg-danger">{{ $errors->first('rating_interior_design') }}</p>
													@endif
													<input type="text" class="input-xs" name="rating_engine_power" id="rating_engine_power" maxlength="2"{{ (Input::old('rating_engine_power')) ? ' value ="' . Input::old('rating_engine_power') . '"' : '' }}>
													<label for="rating_engine_power">ENGINE POWER</label><br>
													@if($errors->has('rating_engine_power'))
														<p class="bg-danger">{{ $errors->first('rating_engine_power') }}</p>
													@endif
													<input type="text" class="input-xs" name="rating_handling" id="rating_handling" maxlength="2"{{ (Input::old('rating_handling')) ? ' value ="' . Input::old('rating_handling') . '"' : '' }}>
													<label for="rating_handling">HANDLING</label><br>
													@if($errors->has('rating_handling'))
														<p class="bg-danger">{{ $errors->first('rating_handling') }}</p>
													@endif
													<input type="text" class="input-xs" name="rating_comfort_luxury" id="rating_comfort_luxury" maxlength="2"{{ (Input::old('rating_comfort_luxury')) ? ' value ="' . Input::old('rating_comfort_luxury') . '"' : '' }}>
													<label for="rating_comfort_luxury">COMFORT/LUXURY</label><br>
													@if($errors->has('rating_comfort_luxury'))
														<p class="bg-danger">{{ $errors->first('rating_comfort_luxury') }}</p>
													@endif
													<input type="text" class="input-xs" name="rating_technology" id="rating_technology" maxlength="2"{{ (Input::old('rating_technology')) ? ' value ="' . Input::old('rating_technology') . '"' : '' }}>
													<label for="rating_technology">TECHNOLOGY</label><br>
													@if($errors->has('rating_technology'))
														<p class="bg-danger">{{ $errors->first('rating_technology') }}</p>
													@endif
													<input type="text" class="input-xs" name="rating_safety" id="rating_safety" maxlength="2"{{ (Input::old('rating_safety')) ? ' value ="' . Input::old('rating_safety') . '"' : '' }}>
													<label for="rating_safety">SAFETY</label><br>
													@if($errors->has('rating_safety'))
														<p class="bg-danger">{{ $errors->first('rating_safety') }}</p>
													@endif
												</div>
												<div class="col-lg-6">
													<input type="text" class="input-xs" name="rating_brand" id="rating_brand" maxlength="2"{{ (Input::old('rating_brand')) ? ' value ="' . Input::old('rating_brand') . '"' : '' }}>
													<label for="rating_brand">BRAND</label><br>
													@if($errors->has('rating_brand'))
														<p class="bg-danger">{{ $errors->first('rating_brand') }}</p>
													@endif
													<input type="text" class="input-xs" name="rating_fuel_economy" id="rating_fuel_economy" maxlength="2"{{ (Input::old('rating_fuel_economy')) ? ' value ="' . Input::old('rating_fuel_economy') . '"' : '' }}>
													<label for="rating_fuel_economy">FUEL ECONOMY</label><br>
													@if($errors->has('rating_fuel_economy'))
														<p class="bg-danger">{{ $errors->first('rating_fuel_economy') }}</p>
													@endif
													<input type="text" class="input-xs" name="rating_pricing" id="rating_pricing" maxlength="2"{{ (Input::old('rating_pricing')) ? ' value ="' . Input::old('rating_pricing') . '"' : '' }}>
													<label for="rating_pricing">PRICING</label><br>
													@if($errors->has('rating_pricing'))
														<p class="bg-danger">{{ $errors->first('rating_pricing') }}</p>
													@endif
													<input type="text" class="input-xs" name="rating_maintenance_cost" id="rating_maintenance_cost" maxlength="2"{{ (Input::old('rating_maintenance_cost')) ? ' value ="' . Input::old('rating_maintenance_cost') . '"' : '' }}>
													<label for="rating_maintenance_cost">MAINTENANCE COST</label><br>
													@if($errors->has('rating_maintenance_cost'))
														<p class="bg-danger">{{ $errors->first('rating_maintenance_cost') }}</p>
													@endif
													<input type="text" class="input-xs" name="rating_others" id="rating_others" maxlength="2"{{ (Input::old('rating_others')) ? ' value ="' . Input::old('rating_others') . '"' : '' }}>
													<label for="rating_others">OTHERS</label><br>
													@if($errors->has('rating_others'))
														<p class="bg-danger">{{ $errors->first('rating_others') }}</p>
													@endif
													<input type="text" class="form-control" name="other_rating" id="other_rating" placeholder="OTHER RATING"{{ (Input::old('other_rating')) ? ' value ="' . Input::old('other_rating') . '"' : '' }}>
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
												<?php $counter = 0; ?>
												@foreach($car_choices as $car_choice)
													@if( $counter===0 or $counter==10)
														<div class="col-lg-6"><div class="checkbox">
													@endif
													<input type="checkbox" name="car_choices[]" id="{{ 'car_choice' . $counter}}" value="{{ $car_choice }}" <?php if(Input::old('car_choices')): if(in_array($car_choice, Input::old('car_choices'))): echo ' checked'; endif; endif;?>>
													<label for="{{ 'car_choice' . $counter}}">{{ $car_choice }}</label><br>

													@if($counter!==0 and ($counter==9 or $counter==17))
														</div>
															@if($counter==17)
																<input type="text" class="form-control" name="other_car_choice" id="other_car_choice" placeholder="OTHER CAR CHOICE"{{ (Input::old('other_car_choice')) ? ' value ="' . Input::old('other_car_choice') . '"' : '' }}>
																@if($errors->has('other_car_choice'))
																	<p class="bg-danger">{{ $errors->first('other_car_choice') }}</p>
																@endif
															@endif
														</div>
													@endif
													<?php $counter++; ?>
												@endforeach
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
												<?php $counter = 0; ?>
												@foreach($buy_bmw_reasons as $buy_bmw_reason)
													@if( $counter===0 or $counter==7)
														<div class="col-lg-6"><div class="checkbox">
													@endif
													<input type="checkbox" name="why_buy_a_bmw[]" id="{{ 'buy_bmw_reason' . $counter}}" value="{{ $buy_bmw_reason }}" <?php if(Input::old('why_buy_a_bmw')): if(in_array($buy_bmw_reason, Input::old('why_buy_a_bmw'))): echo ' checked'; endif; endif;?>>
													<label for="{{ 'buy_bmw_reason' . $counter}}">{{ $buy_bmw_reason }}</label><br>

													@if($counter!==0 and ($counter==6 or $counter==11))
														</div>
															@if($counter==11)
																<input type="text" class="form-control" name="other_why_buy_a_bmw" id="other_why_buy_a_bmw" placeholder="OTHER WHY BUY A BMW"{{ (Input::old('other_why_buy_a_bmw')) ? ' value ="' . Input::old('other_why_buy_a_bmw') . '"' : '' }}>
																@if($errors->has('other_why_buy_a_bmw'))
																	<p class="bg-danger">{{ $errors->first('other_why_buy_a_bmw') }}</p>
																@endif
															@endif
														</div>
													@endif
													<?php $counter++; ?>
												@endforeach
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