<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Book extends Model
{
    protected $fillable = ['judul', 'pengarang', 'coverurl', 'fileurl'];
	
	public function showFile ()
    {
        if (Storage::exists($this->fileurl)) {
            return "storage/$this->fileurl";
        }
    }
	
	public function showImage ()
    {
        if (Storage::exists($this->coverurl)) {
            return "storage/$this->coverurl";
        }
    }
}
