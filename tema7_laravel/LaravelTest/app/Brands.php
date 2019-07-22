<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    protected $fillable = ["name", "photo", "country_id"];

    public function products() {
        return $this->hasMany(Product::class);
    }
}
