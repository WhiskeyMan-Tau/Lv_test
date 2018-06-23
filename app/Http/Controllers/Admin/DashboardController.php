<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    // Dashboard
    public static function dashboard(){
        return view('admin.dashboard');
    }
}
