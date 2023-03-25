<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
