<?php

namespace App\Accessors;

use Carbon\Carbon;

trait DefaultAccessors
{
    public function getTitleAttribute($value)
    {
        return strtoupper($value);
    }
    public function getContentAttribute($value)
    {
        return ucfirst($value);
    }

    public function getDateAttribute($value)
    {
        return Carbon::make($value)->format('d/m/Y');
        
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title']= Carbon::make($value)->strtolower($value);
    }
}
