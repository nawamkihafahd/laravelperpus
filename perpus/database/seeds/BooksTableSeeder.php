<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('books')->insert([
            'judul' => 'kkn',
            'pengarang' => 'aghaw',
			'coverurl' => 'coverurls/V9jXhiUMF3Lt3hMyB2yQX5ICRt8YKVIL2nkceSbZ.png',
            'fileurl' => 'fileurls/XBZvMIUt4xgWzXCritwIISIqNkEWORJ13OsVeB1M.pdf',
        ]);
    }
}
