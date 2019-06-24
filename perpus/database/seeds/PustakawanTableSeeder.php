<?php

use Illuminate\Database\Seeder;

class PustakawanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('pustakawans')->insert([
            'nama' => 'Dhafa',
			'notelp' => '200000',
			'alamat' => 'Blok U 182',
			'jobdesc_id' => '1',
        ]);
    }
}
