<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceRule extends Model
{
    use HasFactory;
    protected $table = 'price_rules';
    prootected $fillable = [
        'id',
        'selection',
        'libelle',
        'price_level',
        'price_type',
        'prix_base',
        'operation',
        'valeur',
        'saison',
        'devise',
        'tag_client',
        'date_debut',
        'date_fin',
        'lieu_stockage'
    ];
    public function getPriceLevels(){
        return $this->hasOne(Taxe::class,'id','taxe_id');
    }
}
