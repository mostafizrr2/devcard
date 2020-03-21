<?php

namespace App\Http\Controllers\Admin;

use App\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    function index()
    {
        return view('admin.index');
    }
    function profile()
    {
        $data['profile'] = $profile = Profile::first();
        return view('admin.profile', $data);
    }

    function saveProfile(Request $request)
    {

        // dd($request->all());

       $request->validate([
        "my_name" => "required|max:150",
        "my_title" => "required|max:150",
        "my_primary_phone" => 'required|max:15',
        "my_secondery_phone" => 'max:15',
        "my_primary_email" => 'required|max:150',
        "my_secondery_email" => 'max:150',
        "my_web_address" => 'max:150',
        "my_street_address" => 'max:255',
        "my_city" => 'max:50',
        "my_zip" => 'max:10',
        "my_latitude" => 'max:50',
        "my_longitude" => 'max:50',
        "my_working_title" => 'required|max:50',
        "my_working_description" => 'required|max:200',
        "my_short_description" => 'required|max:120',
        // "my_brief_description" => 'max:350'
        ]);


       $profile = Profile::first();

    //    dd($profile);
       
       $profile_image = imageUpload($request,  $profile, 'profile_image');
       $about_image = imageUpload($request,  $profile, 'about_image');

       $profile->my_name = $request->my_name;
       $profile->my_title = $request->my_title;
       $profile->my_primary_phone = $request->my_primary_phone;
       $profile->my_secondery_phone = $request->my_secondery_phone;
       $profile->my_primary_email = $request->my_primary_email;
       $profile->my_secondery_email = $request->my_secondery_email;
       $profile->my_web_address = $request->my_web_address;
       $profile->my_street_address = $request->my_street_address;
       $profile->my_city = $request->my_city;
       $profile->my_zip = $request->my_zip;
       $profile->my_latitude = $request->my_latitude;
       $profile->my_longitude = $request->my_longitude;
       $profile->my_working_title = $request->my_working_title;
       $profile->my_working_description = $request->my_working_description;
       $profile->my_short_description = $request->my_short_description;
       $profile->my_brief_description = $request->my_brief_description;
       $profile->my_profile_image = $profile_image;
       $profile->my_about_image = $about_image;
       $profile->save();

       return redirect()->back();

    }

}
