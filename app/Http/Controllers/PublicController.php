<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function index()
    {
        return view('public.about');
    }

    public function portfolio()
    {
        return view('public.portfolio');
    }

    public function services()
    {
        return view('public.services');
    }

    public function resume()
    {
        return view('public.resume');
    }

    public function blog()
    {
        return view('public.blog');
    }

    public function contact()
    {
        return view('public.contact');
    }

    public function hire()
    {
        return view('public.hire');
    }

    public function article()
    {
        return view('public.article');
    }

    public function project()
    {
        return view('public.project');
    }
}
