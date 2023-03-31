<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Admin extends Model
{
    use HasFactory,Notifiable;
    protected $table = 'admins';
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'tele',
        'langue',
        'actif',
        'nom_affichage'
    ];
    public function user(){
        return $this -> hasOne(User::class,'id','id_user');
    }
}
