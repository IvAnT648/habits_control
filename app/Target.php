<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    /**
     * Target types
     */
    const
        EVERY_DAY_TARGET_TYPE              = 0,
        ONCE_WEEK_TARGET_TYPE              = 1,
        TWICE_WEEK_TARGET_TYPE             = 2,
        THREE_TIMES_AT_WEEK                = 3,
        FOUR_TIMES_AT_WEEK                 = 4,
        FIVE_TIMES_AT_WEEK                 = 5,
        SIX_TIMES_AT_WEEK                  = 6,
        CUSTOM_COUNT_PER_MONTH_TARGET_TYPE = 7
    ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'title', 'description', 'reasons'];
}
