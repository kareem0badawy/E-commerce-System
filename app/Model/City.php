<?php

namespace App\Model;

use App\Model\Country;
use Illuminate\Database\Eloquent\Model;

class City extends Model {
	protected $guarded = [];

	public function country() {
		return $this->hasOne(Country::class, 'id', 'country_id');
	}
}
