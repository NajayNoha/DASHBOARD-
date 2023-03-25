<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Societe extends Model
{
    use HasFactory,Notifiable;
    protected $table = 'societe';
    protected $fillable = [
        'nom',
        'web_site',
        'email',
        'tel',
        'address1',
        'address2',
        'codePostal',
        'ville',
        'logo',
        'facebook',
        'twitter',
        'id_country'
    ];
    
}
