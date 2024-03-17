<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $guarded = [];
    
    use HasFactory;

    public function products()
    {
        return $this->belongsToMany(Product::class, 'catalog_product');
    }
}
