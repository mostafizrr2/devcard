<?php

namespace App\Http\Controllers\Admin;

use App\Portfolio;
use App\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['portfolios'] = Portfolio::latest()->get();
        return view('admin.portfolio.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['testimonials'] = Testimonial::where('status', true)->get();
        return view('admin.portfolio.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "project_name" => 'required|max:150',
            "project_intro" => 'required|max:255',
            "short_description" => 'required',
            "client_name" => 'required|max:50',
            "project_size" => 'required',
            "project_url" => 'max:200',
            "status" => "required",
            "project_image"=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if($request->hasFile('project_image'))
        {
            $file = $request->file('project_image');
            $ext = $file->getClientOriginalExtension();
            $image = "portfolio".uniqid().time().".".$ext;

            if(!Storage::disk('public')->exists('portfolio'))
            {
                Storage::disk('public')->makeDirectory('portfolio');
            }

            $path = "storage/portfolio/".$image;

            Image::make($file)->fit(220,450)->resize(200,500)->save($path);
        }
        else 
        {
            $image = null;
        }

        $portfolio = new Portfolio();
        $portfolio->project_name = $request->project_name;
        $portfolio->slug = time();
        $portfolio->project_intro = $request->project_intro;
        $portfolio->short_description = $request->short_description;
        $portfolio->brief_description = $request->brief_description;
        $portfolio->client_name = $request->client_name;
        $portfolio->project_size = $request->project_size;
        $portfolio->project_url = $request->project_url;
        $portfolio->testimonial_id = $request->testimonial_id;

        $featured = ($request->is_featured == 'on') ? true : false;
        $portfolio->is_featured =  $featured;

        $portfolio->status = $request->status;
        $portfolio->project_image = $image;

        $portfolio->save();

        return redirect()->route('portfolio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['testimonials'] = Testimonial::where('status', true)->get();
        $data['portfolio'] = Portfolio::whereId($id)->first();
        return view('admin.portfolio.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            "project_name" => 'required|max:150',
            "project_intro" => 'required|max:255',
            "short_description" => 'required',
            "client_name" => 'required|max:50',
            "project_size" => 'required',
            "project_url" => 'max:200',
            "status" => "required",
            // "project_image"=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $portfolio = Portfolio::whereId($id)->first();

        if($request->hasFile('project_image'))
        {

            if($portfolio->project_image != null)
            {
                Storage::disk('public')->delete('portfolio/'. $portfolio->project_image);
            }


            $file = $request->file('project_image');
            $ext = $file->getClientOriginalExtension();
            $image = "portfolio".uniqid().time().".".$ext;

            if(!Storage::disk('public')->exists('portfolio'))
            {
                Storage::disk('public')->makeDirectory('portfolio');
            }

            $path = "storage/portfolio/".$image;

            Image::make($file)->fit(400,450)->resize(400,450)->save($path);
        }
        else 
        {
            $image = $portfolio->project_image;
        }

        $portfolio->project_name = $request->project_name;
        $portfolio->project_intro = $request->project_intro;
        $portfolio->short_description = $request->short_description;
        $portfolio->brief_description = $request->brief_description;
        $portfolio->client_name = $request->client_name;
        $portfolio->project_size = $request->project_size;
        $portfolio->project_url = $request->project_url;
        $portfolio->testimonial_id = $request->testimonial_id;

        // if($portfolio->is_featured == 'on')
        $featured = ($request->is_featured == 'on') ? true : false;
        $portfolio->is_featured =  $featured;

        $portfolio->status = $request->status;
        $portfolio->project_image = $image;

        $portfolio->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::whereId($id)->first();      

        if($portfolio->project_image != null)
        {
            Storage::disk('public')->delete('portfolio/'. $portfolio->project_image);
        }

        $portfolio->delete();

        return redirect()->back();
        
    }
}
