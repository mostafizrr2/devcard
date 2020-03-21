<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Testimonial;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['testimonials'] = Testimonial::latest()->get();
        return view('admin.testimonial', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'client_name' => 'required|max:50',
            'client_title' => 'required|max:60',
            'client_message' => 'required|max:300',
            'client_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'client_company' => 'required|max:50',
            'client_url' => 'max:100',
            'status' => 'required'
        ]);

        if($request->hasFile('client_image'))
        {
            $file = $request->file('client_image');
            $ext = $file->getClientOriginalExtension();
            $image = "testimonial".uniqid().time().".".$ext;

            if(!Storage::disk('public')->exists('testimonial'))
            {
              Storage::disk('public')->makeDirectory('testimonial');
            }
            $path = "storage/testimonial/". $image;
            Image::make($file)->fit(70, 70)->resize(70, 70)->circle(10, 100, 100, function ($draw) {
                $draw->background('#0000ff');
                $draw->border(1, '#f00');
            })->save($path);
        }
        else 
        {
            $image = "";
        }

        $testimonial = new Testimonial();
        $testimonial->client_name = $request->client_name;
        $testimonial->client_title = $request->client_title;
        $testimonial->client_message = $request->client_message;
        $testimonial->client_company = $request->client_company;
        $testimonial->client_url = $request->client_url;
        $testimonial->client_image = $image;
        $testimonial->status = $request->status;
        $testimonial->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        // dd($request->all());
        $request->validate([
            'client_name' => 'required|max:50',
            'client_title' => 'required|max:60',
            'client_message' => 'required|max:300',
            'client_company' => 'required|max:50',
            'client_url' => 'max:100',
            'status' => 'required'
        ]);

        $testimonial = Testimonial::whereId($id)->first();

        if($request->hasFile('client_image'))
        {
            $request->validate([
                'client_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if( $testimonial->client_image != null )
            {
                Storage::disk('public')->delete('testimonial/'. $testimonial->client_image);
            }


            $file = $request->file('client_image');
            $ext = $file->getClientOriginalExtension();
            $image = "testimonial".uniqid().time().".".$ext;

            if(!Storage::disk('public')->exists('testimonial'))
            {
              Storage::disk('public')->makeDirectory('testimonial');
            }
            $path = "storage/testimonial/". $image;
            Image::make($file)->fit(70, 70)->resize(70, 70)->save($path);
        }
        else 
        {
            $image = $testimonial->client_image;
        }

        $testimonial->client_name = $request->client_name;
        $testimonial->client_title = $request->client_title;
        $testimonial->client_message = $request->client_message;
        $testimonial->client_company = $request->client_company;
        $testimonial->client_url = $request->client_url;
        $testimonial->client_image = $image;
        $testimonial->status = $request->status;
        $testimonial->save();

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
        $testimonial = Testimonial::whereId($id)->first();
        
        if( $testimonial->client_image != null )
        {
            Storage::disk('public')->delete('testimonial/'. $testimonial->client_image);
        }

        $testimonial->delete();

        return redirect()->back();
    }
}
