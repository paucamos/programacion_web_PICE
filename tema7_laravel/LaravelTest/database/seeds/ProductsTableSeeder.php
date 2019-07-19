<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Products')->insert([
            'name'=>'Producte 1',
            'description'=>'lorem ipsum producte',
            'image'=>'/img/',
            'price'=>3.43,
            'stock'=>10
        ]);
    }
}