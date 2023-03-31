<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->truncate();
        $currencies = [
            [
                'code' => 'USD',
                'name' => 'US Dollar',
            ],
            [
                'code' => 'EUR',
                'name' => 'Euro',
            ],
            [
                'code' => 'GBP',
                'name' => 'British Pound',
            ],
            [
                'code'=> 'MAD',
                'name' => 'Moroccan Dirham '
            ],
            [
                'code'=> 'ARS',
                'name' => 'Argentine Peso'
            ],
            [
                'code'=> 'AUD',
                'name' => 'Australian Dollar'
            ],
            [
                'code'=> 'BND',
                'name' => 'Brunei Dollar'
            ],
            [
                'code'=> 'CLP',
                'name' => 'Chilean Peso'
            ],
            [
                'code'=> 'COP',
                'name' => 'Colombian Peso'
            ],
            [
                'code'=> 'HKD',
                'name' => 'Hong Kong Dollar'
            ],
            [
                'code'=> 'KYD',
                'name' => 'Cayman Islands Dollar'
            ],
            [
                'code'=> 'MXN',
                'name' => 'Mexican Peso'
            ],
            [
                'code'=> 'NZD',
                'name' => 'New Zealand Dollar'
            ],
            [
                'code'=> 'SGD',
                'name' => 'Signapore Dollar'
            ],
            [
                'code'=> 'CNY',
                'name' => 'Chinese Yuan Renminbi'
            ],
            [
                'code'=> 'JPY',
                'name' => 'Japanese Yen'
            ],
            [
                'code'=> 'THB',
                'name' => 'Thai Baht'
            ],
            ];
            DB::table('currencies')->insert($currencies);
    }
}
