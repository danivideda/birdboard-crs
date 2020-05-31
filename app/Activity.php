<?php

namespace App;

use Carbon\Traits\Date;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $guarded = [];
    protected $casts = [
        'changes' => 'array'
    ];

    public function subject()
    {
       return $this->morphTo();

    }
}
