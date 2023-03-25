<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fournisseur;

class FournisseurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fournisseur::insert([
            ['name'=>'Fournisseur1' , 
            'email'=>'f1@gmail.com' , 
            'tel'=>'0635143725' , 
            'pays' => 'MA' , 
            'adresse1' => 'Ad1' , 
            'adresse2' => 'Ad2' , 
            'postalCode' => '40000',
            'city'=>'Marrakech',
            'price_level'=>'20',
            'devise'=>'MAD',
            'discount'=>'30',
            'taxes'=>null
            ]
        ]);
    }
}
