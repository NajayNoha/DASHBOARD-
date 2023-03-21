<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Taxe extends Model
{
    use HasFactory;    
    public function products()
    {
        return $this->belongsToMany(Product::class , 'product_tax' , 'id_taxe' , 'id_product');
    }
    
}
