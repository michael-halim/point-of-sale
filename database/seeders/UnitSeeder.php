<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('units')->delete();
        $unit = array(
            array(
                'unit_name' => 'kilogram',
                'unit_abb' => 'kg',
                'is_fraction' => true,
            ),
            array(
                'unit_name' => 'meter',
                'unit_abb' => 'm',
                'is_fraction' => false,
            ),
        );
        DB::table('units')->insert($unit);
    }
}
