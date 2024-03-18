<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('suppliers')->delete();
        $suppliers = array(
            array(
                'supplier_name' => 'Supplier Roti',
            ),
            array(
                'supplier_name' => 'Supplier Besi',
            ),
        );
        DB::table('suppliers')->insert($suppliers);
    }
}
