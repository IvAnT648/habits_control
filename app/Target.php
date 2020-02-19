<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    /**
     * Target types
     */
    const
        EVERY_DAY_TARGET_TYPE = 0,
        COUNT_PER_MONTH_TARGET_TYPE = 1
    ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'title', 'description', 'reasons'];
}
