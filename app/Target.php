<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Target extends Model
{
    /**
     * Target types
     */
    const
        EVERY_DAY_TARGET_TYPE              = 0,
        ONCE_AT_WEEK_TARGET_TYPE           = 1,
        TWICE_AT_WEEK_TARGET_TYPE          = 2,
        THRICE_AT_WEEK_TARGET_TYPE         = 3,
        FOUR_TIMES_AT_WEEK_TARGET_TYPE     = 4,
        FIVE_TIMES_AT_WEEK_TARGET_TYPE     = 5,
        SIX_TIMES_AT_WEEK_TARGET_TYPE      = 6,
        CUSTOM_COUNT_PER_MONTH_TARGET_TYPE = 7
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

    /**
     * Returns user targets collection
     *
     * @return Target[]|Collection
     */
    static function getUserTargets()
    {
        $id = Auth::user()->id;
        return Target::all()->where('user_id', $id);
    }

    /**
     * Returns user targets collection
     *
     * @return Target[]|Collection
     */
    static function getTodayTargets()
    {
        $targets = Target::getUserTargets();
        foreach ($targets as $target) {
            $target->setAttribute('checked', (bool)Mark::getTodayMark($target));
        }
        return $targets;
    }
}
