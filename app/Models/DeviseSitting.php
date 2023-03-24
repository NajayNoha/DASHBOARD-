<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class DeviseSitting extends Model
{
    use HasFactory,Notifiable;
    protected $table = 'devise_sittings';
    protected $fillable = [
        'devise',
        'taux_change',
        'actif',
        'id_currency'
    ];

    public function currency(){
        return $this -> hasOne(Currency::class,'id','id_currency');
    }
}
