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

}
