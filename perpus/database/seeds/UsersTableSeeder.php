<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@perputakaan.perpus',
			'username' => 'admin',
            'password' => bcrypt('admin123'),
        ]);
    }
}
