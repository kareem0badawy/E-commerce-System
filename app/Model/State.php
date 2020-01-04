<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class State extends Model {
	protected $guarded = [];

	public function country() {
		return $this->hasOne(Country::class, 'id', 'country_id');
	}

	public function city() {
		return $this->hasOne(City::class, 'id', 'city_id');
	}
}
