<?php

namespace App\Http\Controllers;

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
        return view('activity.index', [
            'targets' => Target::getUserTargets()
        ]);
    }

    public function mark(Request $request)
    {
        $data = $request->all();
        dd($data);
    }
}
