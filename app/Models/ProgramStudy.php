<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\StandartFirst;
use App\Models\StandartSecond;
use App\Models\StandartThird;

class ProgramStudy extends Model
{
    protected $fillable = [
    	'name'
    ];

    protected $dates = [
    	'created_at', 'updated_at'
    ];

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
}
