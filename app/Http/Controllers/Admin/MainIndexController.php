<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainIndexController extends Controller
{
    public function admin()
    {
        return view('admin.layouts.admin');
    }
}