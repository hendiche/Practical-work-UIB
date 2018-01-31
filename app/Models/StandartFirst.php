<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProgramStudy;

class StandartFirst extends Model
{
    protected $fillable = [
    	'val11a', 'val11b', 'val12', 'score'
    ];

    protected $guarded = [
    	'accreditation_id',
    ];

    protected $dates = [
    	'created_at', 'updated_at',
    ];

    public function programStudy()
    {
    	return $this->belongsTo(ProgramStudy::class);
    }
}
