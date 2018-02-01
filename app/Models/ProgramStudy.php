<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Accreditation;

class ProgramStudy extends Model
{
    protected $fillable = [
    	'name'
    ];

    protected $dates = [
    	'created_at', 'updated_at'
    ];

    public function accreditations()
    {
    	return $this->hasMany(Accreditation::class);
    }
}
