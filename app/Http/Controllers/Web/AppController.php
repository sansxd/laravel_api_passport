<?php

namespace laravelito\Http\Controllers\Web;

use laravelito\Http\Controllers\Controller;

class AppController extends Controller
{
    // return blade view app
    public function getApp()
    {
        return view('app');
    }

    public function getLogin()
    {
        return view('login');
    }
}
