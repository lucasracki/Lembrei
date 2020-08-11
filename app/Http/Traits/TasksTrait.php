<?php

namespace App\Http\Traits;

use Carbon\Carbon;

trait TasksTrait {

    public $dateFormatting = true;

    public function getDateAttribute($value){
       if($this->dateFormatting){
           return Carbon::parse($value)->toFormattedDateString();
       } else {
           return $this->attributes['date'] = $value;
       }
    }
}