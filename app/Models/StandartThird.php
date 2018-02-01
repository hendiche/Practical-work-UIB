<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Accreditation;

class StandartThird extends Model
{
    protected $fillable = [
    	'val311a', 'val311b', 'val311c', 'val311d', 'val312', 'val313',
        'val314a', 'val314b', 'val321', 'val322', 'val331a', 'val331b',
        'val331c', 'val332', 'val333', 'val341', 'val342', 'score',
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
