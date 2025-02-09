<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
    public function orderItems() {
        return $this->hasMany(Order_items::class);
    }
    
}
