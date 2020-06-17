<?php

namespace App\Http\Controllers;

use App\Mark;
use App\Target;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Index action
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('activity.index');
    }

    public function getTargets()
    {
        return Target::getTodayTargets()->toArray();
    }

    public function mark($id)
    {
        Mark::setMarkValue($id, 1);
        return Target::getTodayTargets()->toArray();
    }

    public function unmark($id)
    {
        Mark::setMarkValue($id, 0);
        return Target::getTodayTargets()->toArray();
    }
}
