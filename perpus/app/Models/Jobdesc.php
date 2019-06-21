<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jobdesc extends Model
{
    //
	protected $fillable = ['name', 'salary'];
	
	public function pustakawans ()
    {
        return $this->hasMany(Pustakawan::class, 'jobdesc_id', 'id');
    }
}
