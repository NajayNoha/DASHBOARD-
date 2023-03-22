<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class NiveauPrix extends Model
{
    use HasFactory,Notifiable;
    protected $fillable = [
        'nom',
        'type_niveau',
        'actif'
    ];
    protected $table = 'niveau_prix';
    
}
