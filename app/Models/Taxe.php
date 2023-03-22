<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Taxe extends Model
{
    use HasFactory,Notifiable;
    protected $fillable = [
        'nom',
        'abreviation',
        'taux',
        'actif',
    ];
    protected $table = 'taxe';
    public function products()
    {
        return $this->belongsToMany(Product::class , 'product_tax' , 'id_taxe' , 'id_product');
    }

}
