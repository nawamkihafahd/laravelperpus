<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('bookcategories')->insert([
            'nama' => 'Fiksi',
        ]);
		DB::table('bookcategories')->insert([
            'nama' => 'Non-Fiksi',
        ]);
		DB::table('bookcategories')->insert([
            'nama' => 'Horror',
        ]);
		DB::table('bookcategories')->insert([
            'nama' => 'Komedi',
        ]);
    }
}
