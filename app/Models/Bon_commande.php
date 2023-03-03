<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bon_commande extends Model
{
    use HasFactory;

    public function down()
    {
        Schema::dropIfExists('bon_commande');
    }
}
