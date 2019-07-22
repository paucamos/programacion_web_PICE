<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'name' => 'Addidas',
            'photo' => 'www.addidas.es',
            'country_id' => 2
        ]);
        DB::table('brands')->insert([
            'name' => 'Nike',
            'photo' => 'www.nike.es',
            'country_id' => 1
        ]);
        DB::table('brands')->insert([
            'name' => 'Puma',
            'photo' => 'www.puma.es',
            'country_id' => 4
        ]);
        DB::table('brands')->insert([
            'name' => 'Gucci',
            'photo' => 'www.gucci.es',
            'country_id' => 3
        ]);
    }
}
