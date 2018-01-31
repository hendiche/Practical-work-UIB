<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProgramStudy;

class StandartSecond extends Model
{
    protected $fillable = [
    	'val21', 'val22', 'val23', 'val24', 'val25', 'val26', 'score'
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
