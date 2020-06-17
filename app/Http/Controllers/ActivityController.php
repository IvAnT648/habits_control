<?php

namespace App\Http\Controllers;

use App\Mark;
use App\Target;

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

    /**
     * Returns list of current day targets
     *
     * @return array
     */
    public function getTargets()
    {
        return Target::getTodayTargets()->toArray();
    }

    /**
     * Mark a target
     *
     * @param string $id Target ID
     * @return array
     */
    public function mark($id)
    {
        Mark::setMarkValue($id, 1);
        return $this->getTargets();
    }

    /**
     * Unmark a target
     *
     * @param string $id Target ID
     * @return array
     */
    public function unmark($id)
    {
        Mark::setMarkValue($id, 0);
        return $this->getTargets();
    }
}
