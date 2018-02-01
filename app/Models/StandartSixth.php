<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Accreditation;

class StandartSixth extends Model
{
    protected $fillable = [
    	'val61', 'val621', 'val622', 'val623', 'val631', 'val632', 'val633',
        'val641a', 'val641b', 'val641c', 'val641d', 'val641e', 'val642',
        'val643', 'val651', 'val652', 'score'
    ];

    protected $guarded = [
    	'accreditation_id',
    ];

    protected $dates = [
    	'created_at', 'updated_at',
    ];

    public function accreditation()
    {
    	return $this->belongsTo(Accreditation::class);
    }
}
