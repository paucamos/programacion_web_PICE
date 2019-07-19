<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            "name"=>'Esports',
            "icon"=>'www.google.es'
        ]);
        DB::table('categories')->insert([
            "name"=>'Tecnologia',
            "icon"=>'www.google.es'
        ]);
        DB::table('categories')->insert([
            "name"=>'Cuina',
            "icon"=>'www.google.es'
        ]);
        DB::table('categories')->insert([
            "name"=>'Casa',
            "icon"=>'www.google.es'
        ]);
        DB::table('categories')->insert([
            "name"=>'Jardi',
            "icon"=>'www.google.es'
        ]);
        DB::table('categories')->insert([
            "name"=>'So',
            "icon"=>'www.google.es'
        ]);
        DB::table('categories')->insert([
            "name"=>'Video',
            "icon"=>'www.google.es'
        ]);
    }
}
