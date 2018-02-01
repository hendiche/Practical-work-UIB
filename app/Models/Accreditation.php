<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ProgramStudy;
use App\Models\StandartFirst;
use App\Models\StandartSecond;
use App\Models\StandartThird;
use App\Models\StandartFourth;
use App\Models\StandartFifth;
use App\Models\StandartSixth;
use App\Models\StandartSeventh;

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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function programStudy()
    {
    	return $this->belongsTo(ProgramStudy::class, 'prodi_id');
    }

    public function standartFirst()
    {
    	return $this->hasOne(StandartFirst::class);
    }

    public function standartSecond()
    {
    	return $this->hasOne(StandartSecond::class);
    }

    public function standartThird()
    {
    	return $this->hasOne(StandartThird::class);
    }

    public function standartFourth()
    {
    	return $this->hasOne(StandartFourth::class);
    }

    public function standartFifth()
    {
    	return $this->hasOne(StandartFifth::class);
    }

    public function standartSixth()
    {
    	return $this->hasOne(StandartSixth::class);
    }

    public function standartSeventh()
    {
    	return $this->hasOne(StandartSeventh::class);
    }
}
