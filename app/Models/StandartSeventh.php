<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Accreditation;

class StandartSeventh extends Model
{
    protected $fillable = [
    	'val711', 'val712', 'val713', 'val714', 'val721', 'val722',
        'val731', 'val732', 'score'
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
