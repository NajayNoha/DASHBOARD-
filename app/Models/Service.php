<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Taxe;

class Service extends Model
{
    use HasFactory;
    protected $table = 'service';
    protected $fillable =[
        'nom','reference','prix','description','taxe_id'
    ];
    public function getTaxes(){
        return $this->hasOne(Taxe::class,'id','taxe_id');
    }
}
