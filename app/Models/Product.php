<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Fournisseur;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable =[
        'name' , 'sku' , 'description' , 'price' ,'devise1','buying_price','devise2',
        'fournisseur','marque','pays_origine','poids','poids_unit','image','tax'
    ];
    public function getFournisseur(){
        return $this->hasOne(Fournisseur::class,'id','fournisseur');
    }
}
