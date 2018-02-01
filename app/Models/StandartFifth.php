<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Accreditation;

class StandartFifth extends Model
{
    protected $fillable = [
    	'val511a', 'val511b', 'val512a', 'val512b', 'val512c', 'val513', 'val514',
        'val52a', 'val52b', 'val531a', 'val531b', 'val532', 'val541a', 'val541b',
        'val541c', 'val542', 'val551a', 'val551b', 'val551c', 'val551d', 'val552',
        'val56', 'val571', 'val572', 'val573', 'val574', 'val575', 'opsi', 'score'
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
