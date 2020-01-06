<?php

namespace App\Model;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model {
    protected $guarded = [];

    public function user_id() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}
