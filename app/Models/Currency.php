<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Currency extends Model
{
    use HasFactory,Notifiable;
    protected $table = 'currencies';
    protected $fillable = [
        'code',
        'name'
    ];

    public function deviseSitting(){
        return $this -> belongsTo(DeviseSitting::class);
    }
}
