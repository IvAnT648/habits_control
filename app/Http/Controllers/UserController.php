<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Activity table action
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function activity()
    {
        return view('activity');
    }
}
