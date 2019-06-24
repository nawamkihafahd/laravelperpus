<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
		$this->call(BooksTableSeeder::class);
		$this->call(JobdescsTableSeeder::class);
		$this->call(PelangganTableSeeder::class);
		$this->call(PustakawanTableSeeder::class);
		$this->call(CategoriesTableSeeder::class);
    }
}
