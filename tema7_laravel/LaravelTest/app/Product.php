<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ["name", "description", "category_id", "image", "price", "stock"]; //camps de la base de dades que son editables

    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function brand() {
        return $this->belongsTo(Brands::class);
    }

}
