<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Mark extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['value', 'target_id', 'user_id', 'day'];

    /**
     * Set mark value for a target
     *
     * @param string $targetId Target ID
     * @param string $value    Mark value
     * @return void
     */
    public static function setMarkValue($targetId, $value)
    {
        $currentDate = Carbon::now()->toDateString();
        $mark = Mark::all()
            ->where('target_id', $targetId)
            ->where('day', $currentDate)
            ->first();

        if ($mark) {
            $mark->update(['value' => $value]);
        } else {
            Mark::create([
                'value'     => $value,
                'target_id' => $targetId,
                'user_id'   => Auth::user()->id,
                'day'       => $currentDate
            ]);
        }
    }

    /**
     * Returns  today mark for a target
     *
     * @param Target $target Target
     * @return mixed|null
     */
    public static function getTodayMark(Target $target)
    {
        $currentDate = Carbon::now()->toDateString();
        $value = DB::table('marks')
            ->where('target_id', $target->id)
            ->where('day', $currentDate)
            ->value('value');
        return $value;
    }
}
