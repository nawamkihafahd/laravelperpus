<?php

use Illuminate\Database\Seeder;

class PelangganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('pelanggans')->insert([
            'nama' => 'Dhafa',
			'notelp' => '200000',
			'alamat' => 'Blok U 182',
        ]);
		
		DB::table('pelanggans')->insert([
            'nama' => 'Someone',
			'notelp' => 'Number',
			'alamat' => 'Somewhere',
        ]);
    }
}
