<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Taxe;

class TaxeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Taxe::insert([
            ['nom'=>'taxe 1' , 'abreviation' => 'T1' , 'taux' => '20' , 'created_at'=>now() , 'updated_at'=>now()],
            ['nom'=>'taxe 2' , 'abreviation' => 'T2' , 'taux' => '10' , 'created_at'=>now() , 'updated_at'=>now()]
        ]);
    }
}
