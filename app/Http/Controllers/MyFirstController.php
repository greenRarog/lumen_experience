<?php

namespace App\Http\Controllers;

class MyFirstController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function get()
    {
        return 'get function My first controller';
    }
    //
}
