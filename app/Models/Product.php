<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];  
    
    use HasFactory;

    public function catalogs()
    {
        return $this->belongsToMany(Catalog::class, 'catalog_product');
    }
}

