<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Mall extends Model {
    protected $guarded = [];

    public function country_id() {
        return $this->hasOne('App\Model\Country', 'id', 'country_id');
    }

}
