<?php

namespace App\Http\Controllers\AdminPortal;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // page view route function
    public function index()
    {
        return view("admin/index");
    }
}
