<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Fournisseur;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    public function factures()
    {
        return $this->belongsToMany(Facture::class)->withPivot('quantity');
    }
    public function bon_commandes()
    {
        return $this->belongsToMany(Bon_commande::class);
    }
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'sku' ,
        'name' ,
        'description' ,
        'price' ,
        'buying price',
        'fournisseur',
        'taxes',
        'image',
        'marque',
        'pays origine',
        'poids'
    ];
    public function getFournisseur(){
        return $this->hasOne(Fournisseur::class,'id','fournisseur');
    }
    public function taxes()
    {
        return $this->belongsToMany(Taxe::class , 'product_tax' , 'id_product' , 'id_taxe');
    }
}
