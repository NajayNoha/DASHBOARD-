<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::insert([
            [
            'id'=>1,
            'nom'=>'service 1',
            'reference'=>'ref1',
            'prix'=>'30',
            'devise_prix'=>'MAD',
            'description'=>'Service description',
            'taxe_id'=>1,
            'created_at'=>now(),
            'updated_at'=>now()
            ]
        ]);
    }
}
