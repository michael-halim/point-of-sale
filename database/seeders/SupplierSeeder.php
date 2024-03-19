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
                'supplier_address' => '969 Howell Drive',
                'supplier_phone' => '(515) 713-7552 x54372',
                'remarks' => 'Clothing',
            ),
            array(
                'supplier_name' => 'Supplier Besi',
                'supplier_address' => '198 Howell Drive',
                'supplier_phone' => '(213) 906-5431 x0398',
                'remarks' => 'Account',
            ),
        );
        DB::table('suppliers')->insert($suppliers);
    }
}
