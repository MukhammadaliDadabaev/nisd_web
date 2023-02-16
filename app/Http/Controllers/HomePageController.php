<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function features()
    {
        return view('features');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function resume()
    {
        return view('resume');
    }

    public function clients()
    {
        return view('clients');
    }

    public function pricing()
    {
        return view('pricing');
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }
}