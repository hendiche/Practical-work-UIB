<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Accreditation;

class StandartFourth extends Model
{
    protected $fillable = [
    	'val41', 'val421', 'val422', 'val431a', 'val431b', 'val431c', 'val431d',
        'val432', 'val433', 'val434', 'val435', 'val441', 'val442a', 'val442a',
        'val442b', 'val451', 'val452', 'val453', 'val454', 'val455', 'val461a',
        'val461b', 'val461c', 'val462', 'dosen', 'opsi', 'score'
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
