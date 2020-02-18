<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    /**
     * Primary key
     *
     * @var string
     */
    protected $primaryKey = 'target_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'title', 'description', 'reasons'];
}
