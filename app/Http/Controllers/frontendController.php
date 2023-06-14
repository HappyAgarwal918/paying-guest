<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sponser;
use App\Models\testimonial;
use App\Models\User;
use App\Models\contact;
use App\Models\properties;
use Carbon\Carbon;
use Stevebauman\Location\Facades\Location;

class frontendController extends Controller
{
    public function index()
    {
        $data['testimonial'] = testimonial::get();
        $data['properties'] = properties::with('propertyuser')->get();

        // echo "<pre>";print_r($data);die;

        return view('frontend.index', compact('data'));
    }

    public function aboutUs()
    {
        $data['sponser'] = sponser::get();
        $data['agents'] = User::where('type', 2)->limit(4)->get();

        return view('frontend.about_us', compact('data'));
    }

    public function contactUs()
    {
        $data['sponser'] = sponser::get();

        return view('frontend.contact_us', compact('data'));
    }

    public function contactSave(Request $request)
    {
        $data = $request->except(['_token']);

        $data = contact::create($data);

        return back()->with('success', 'Form Submitted Successfully');
    }

    public function privacy()
    {
        return view('frontend.privacy');
    }

    public function tandc()
    {
        return view('frontend.termcondition');
    }

    public function blogs()
    {
        $data['sponser'] = sponser::get();
        
        return view('frontend.blogs', compact('data'));
    }

    public function agents()
    {
        $data['agents'] = User::where('type', 2)->with('properties')->get();
        $data['owner'] = User::where('type', 3)->get();

        return view('frontend.agents', compact('data'));
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }

    public function properties($id = Null)
    {
        if($id != NULL){
            $data['properties'] = properties::where('user_id', decrypt($id))->get();
        }else{
            $data['properties'] = properties::with('propertyuser')->get();
        }

        return view('frontend.properties', compact('data'));
    }

    public function propertydetail(Request $request, $id)
    {
        $decryptid = decrypt($id);
        
        $data = properties::where('id', $decryptid)->with('propertyuser')->first();

        return view('frontend.property_detail', compact('data'));
    }

    public function display(Request $request)
    {
        /* $ip = $request->ip(); Dynamic IP address */
        $ip = '122.173.28.156'; /* Static IP address */
        $currentUserInfo = Location::get($ip);

        echo "<pre>";print_r($currentUserInfo);die;
          
        return view('user', compact('currentUserInfo'));
    }
}
