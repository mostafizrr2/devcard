<?php

namespace App\Http\Controllers\Admin;

use App\Work;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['works'] = Work::latest()->get();
        return view('admin.work', $data);
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
            'title' => 'required|max:60',
            'description' => 'required|max:300',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024',
        ]);

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $image = "work".uniqid().time().".".$ext;

            if(!Storage::disk('public')->exists('work'))
            {
              Storage::disk('public')->makeDirectory('work');
            }
            $path = "storage/work/". $image;
            Image::make($file)->fit(50, 50)->resize(50, 50)->save($path);
        }
        else 
        {
            $image = "";
        }

        $work = new Work();
        $work->title = $request->title;
        $work->description = $request->description;
        $work->image = $image;
        $work->status = $request->status;
        $work->save();

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
            'title' => 'required|max:60',
            'description' => 'required|max:300',
        ]);

        $work = Work::whereId($id)->first();

        if($request->hasFile('image'))
        {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:1024',
            ]);

            if( $work->image != null )
            {
                Storage::disk('public')->delete('work/'. $work->image);
            }


            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $image = "work".uniqid().time().".".$ext;

            if(!Storage::disk('public')->exists('work'))
            {
              Storage::disk('public')->makeDirectory('work');
            }
            $path = "storage/work/". $image;
            Image::make($file)->fit(50, 50)->resize(50, 50)->save($path);
        }
        else 
        {
            $image = $work->image;
        }

        $work->title = $request->title;
        $work->description = $request->description;
        $work->image = $image;
        $work->status = $request->status;
        $work->save();

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
        $work = Work::whereId($id)->first();
        
        if( $work->image != null )
        {
            Storage::disk('public')->delete('work/'. $work->image);
        }

        $work->delete();

        return redirect()->back();
    }
}
