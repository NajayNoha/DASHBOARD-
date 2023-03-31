<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceLevel extends Model
{
    use HasFactory;
    protected $table = 'niveau_prix';
    protected $fillable = ['id','prix','devise','type_niveau','id_produit','id_client','id_societe'];
}
