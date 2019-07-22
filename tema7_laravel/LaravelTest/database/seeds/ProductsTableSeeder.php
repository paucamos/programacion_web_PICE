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
            'stock'=>10,
            'category_id' => 2,
            'brand_id' => 1
        ]);
        DB::table('Products')->insert([
            'name'=>'Producte 2',
            'description'=>'lorem ipsum producte',
            'image'=>'/img/',
            'price'=>8.43,
            'stock'=>10,
            'category_id' => 1,
            'brand_id' => 4
        ]);
        DB::table('Products')->insert([
            'name'=>'Producte 3',
            'description'=>'lorem ipsum producte',
            'image'=>'/img/',
            'price'=>100,
            'stock'=>10,
            'category_id' => 5,
            'brand_id' => 2
        ]);
    }
}