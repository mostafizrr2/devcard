<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\Work;
use App\Profile;
use App\Testimonial;
use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function index()
    {
        $data['works'] = Work::where('status', true)->get();
        $data['testimonials'] = Testimonial::where('status', true)->latest()->get();
        $data['portfolios'] = Portfolio::where('status', true)->where('is_featured', true)->latest()->get();
        return view('public.about',$data);
    }

    public function portfolio()
    {
        $data['portfolios'] = Portfolio::where('status', true)->latest()->get();
        return view('public.portfolio',$data);
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

    public function project($slug)
    {
        $data['portfolio'] = Portfolio::with('testimonial')->where('slug', $slug)->first();

        // dd($data['portfolio']->testimonial);

        if(!$data['portfolio'])
        {
            abort(404);
        }
        return view('public.project',$data);
    }
}
