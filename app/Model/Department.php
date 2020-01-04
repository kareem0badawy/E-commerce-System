<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Department extends Model {
	protected $guarded = [];

	public function parents() {
		return $this->hasMany(Department::class, 'id', 'parent_id');
	}

}
