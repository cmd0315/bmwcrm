<?php namespace BMW\Locations;

use BMW\Locations\Location;

class LocationRepository {

	/**
	* Persists a Location
	*
	* @param Location $location
	* @return Location
	*/
	public function save(Location $location) {
		return $location->save();
	}

	/**
	* Return instance of Location
	*
	* @param int $id
	* @return Location
	*/
	public function getLocationByID($id) {

		return Location::wherenID($id)->firstOrFail();
	}

	/**
	* Return all instances of Location
	*
	* @return array
	*/
	public function getAll() {
		return Location::withTrashed()->orderBy('id', 'ASC');
	}

	/**
	* Return all instances of cities in Location
	*
	* @return array
	*/
	public function getCities() {
		return Location::orderBy('city')->lists('city', 'city');
	}

	/**
	* Return all instances of provinces/area_name in Location
	*
	* @return array
	*/
	public function getProvinces() {
		$provinces = Location::orderBy('area_name')->lists('area_name', 'area_name');

		return array_unique($provinces);
	}

	public function getCitiesByProvince($province) {
		return Location::where('area_name', '=', $province)->orderBy('city')->lists('city', 'city');
	}

}