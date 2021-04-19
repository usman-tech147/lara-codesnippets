<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')
            ->insert
            (
                [
                    [
                        'name' => 'Afghanistan',
                        'code' => 'af',
                        'zip_code' => '111'
                    ],
                    [
                        'name' => 'Pakistan',
                        'code' => 'pa',
                        'zip_code' => '222'
                    ],
                    [
                        'name' => 'America',
                        'code' => 'am',
                        'zip_code' => '444'
                    ],
                    [
                        'name' => 'India',
                        'code' => 'in',
                        'zip_code' => '000'
                    ],
                    [
                        'name' => 'Iran',
                        'code' => 'ia',
                        'zip_code' => '123'
                    ],
                    [
                        'name' => 'China',
                        'code' => 'ch',
                        'zip_code' => '234'
                    ],
                    [
                        'name' => 'Iraq',
                        'code' => 'ir',
                        'zip_code' => '456'
                    ],
                    [
                        'name' => 'Bangladesh',
                        'code' => 'ba',
                        'zip_code' => '147'
                    ],
                    [
                        'name' => 'Turkey',
                        'code' => 'tu',
                        'zip_code' => '187'
                    ],
                ]
            );
    }
}
