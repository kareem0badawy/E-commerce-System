<?php

namespace App\Model;

use App\Model\File;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function files()
    {
        return $this->hasMany(File::class,'relation_id','id')->where('file_type','product');
    }
}
