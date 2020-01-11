<?php

namespace App\Model;

use App\Model\Department;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $guarded = [];

    public function department() {
		return $this->hasOne(Department::class, 'id', 'department_id');
	}
}
