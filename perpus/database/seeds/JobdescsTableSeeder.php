<?php

use Illuminate\Database\Seeder;

class JobdescsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('jobdescs')->insert([
            'name' => 'Counter',
			'salary' => 2000000,
        ]);
		
		DB::table('jobdescs')->insert([
            'name' => 'Securityt',
			'salary' => 1000000,
        ]);
    }
}
