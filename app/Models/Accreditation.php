<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accreditation extends Model
{
    protected $fillable = [
    	'total_score',
    ];

    protected $guarded = [
    	'prodi_id', 'user_id',
    ];

    protected $dates = [
    	'accreditation_date', 'created_at', 'updated_at',
    ];
}
