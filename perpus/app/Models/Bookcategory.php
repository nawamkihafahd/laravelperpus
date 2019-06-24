<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookcategory extends Model
{
    //
	protected $fillable = ['nama'];
	
	public function books()
	{
		return $this->belongsToMany(Book::class, 'book_bookcategory', 'category_id', 'buku_id');
	}
}
