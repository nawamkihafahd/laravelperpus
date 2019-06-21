<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pustakawan extends Model
{
    //
	protected $fillable = ['nama', 'alamat', 'notelp', 'jobdesc_id'];
	
	public function jobdesc ()
    {
        return $this->hasOne(Jobdesc::class, 'id', 'jobdesc_id');
    }
	
}
