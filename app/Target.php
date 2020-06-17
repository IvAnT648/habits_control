<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Target extends Model
{
    /**
     * Target types
     */
    const
        EVERY_DAY_TARGET_TYPE              = 1,
        ONCE_AT_WEEK_TARGET_TYPE           = 2,
        TWICE_AT_WEEK_TARGET_TYPE          = 3,
        THRICE_AT_WEEK_TARGET_TYPE         = 4,
        FOUR_TIMES_AT_WEEK_TARGET_TYPE     = 5,
        FIVE_TIMES_AT_WEEK_TARGET_TYPE     = 6,
        SIX_TIMES_AT_WEEK_TARGET_TYPE      = 7,
        CUSTOM_COUNT_PER_MONTH_TARGET_TYPE = 8
    ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'title', 'description', 'reasons'];

    /**
     * Returns target types array
     *
     * @return int[]
     */
    public static function getTypes()
    {
        return [
            'every_day'          => self::EVERY_DAY_TARGET_TYPE,
            'once_at_week'       => self::ONCE_AT_WEEK_TARGET_TYPE,
            'twice_at_week'      => self::TWICE_AT_WEEK_TARGET_TYPE,
            'thrice_at_week'     => self::THRICE_AT_WEEK_TARGET_TYPE,
            'four_times_at_week' => self::FOUR_TIMES_AT_WEEK_TARGET_TYPE,
            'five_times_at_week' => self::FIVE_TIMES_AT_WEEK_TARGET_TYPE,
            'six_times_at_week'  => self::SIX_TIMES_AT_WEEK_TARGET_TYPE,
            'custom_per_month'   => self::CUSTOM_COUNT_PER_MONTH_TARGET_TYPE
        ];
    }

    static function getUserTargets()
    {
        return Target::all()->where('user_id', Auth::user()->id);
    }
}
