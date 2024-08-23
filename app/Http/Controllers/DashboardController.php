<?php

namespace App\Http\Controllers;

 class DashboardController extends Controller
{
    public function index() {
        // return 'Hello, ini adalah Dashboard Controller';
        return view('dashboard');
    }
}
