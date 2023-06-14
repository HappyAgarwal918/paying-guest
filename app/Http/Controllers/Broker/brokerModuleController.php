<?php

namespace App\Http\Controllers\Broker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\properties;
use App\Models\User;
use Mail;
use App\Mail\DemoMail;

class brokerModuleController extends Controller
{
    public function addProperties()
    {
        return view('broker.addProperties');
    }

    public function allProperties()
    {
        $data = properties::where('user_id', Auth()->user()->id)->get();
        
        return view('broker.allProperties', compact('data'));
    }

    public function settings()
    {
        $data = Auth()->user();

        return view('broker.settings',compact('data'));
    }

    public function updateusername(Request $request)
    {
        return back()->with('successful_message', 'Username Updated Successfully');
    }

    public function updateemail(Request $request)
    {
        return back()->with('successful_message', 'Email Updated Successfully');
    }

    public function updatenumber(Request $request)
    {
        return back()->with('successful_message', 'Number Updated Successfully');
    }

    public function propertysave(Request $request)
    {
        $data = $request->except(['_token']);

        if(!in_array('single', $data['room_type'])){
            $data['sb_room_count'] = NULL;
            $data['sb_bathroom_count'] = NULL;
            $data['sb_room_size'] = NULL;
            $data['sb_category'] = NULL;
            $data['sb_furnished_type'] = NULL;
            $data['sb_price'] = NULL;
        }
        if(!in_array('double', $data['room_type'])){
            $data['db_room_count'] = NULL;
            $data['db_bathroom_count'] = NULL;
            $data['db_room_size'] = NULL;
            $data['db_category'] = NULL;
            $data['db_furnished_type'] = NULL;
            $data['db_price'] = NULL;
        }
        if(!in_array('triple', $data['room_type'])){
            $data['tb_room_count'] = NULL;
            $data['tb_bathroom_count'] = NULL;
            $data['tb_room_size'] = NULL;
            $data['tb_category'] = NULL;
            $data['tb_furnished_type'] = NULL;
            $data['tb_price'] = NULL;
        }
        if(!in_array('four', $data['room_type'])){
            $data['fb_room_count'] = NULL;
            $data['fb_bathroom_count'] = NULL;
            $data['fb_room_size'] = NULL;
            $data['fb_category'] = NULL;
            $data['fb_furnished_type'] = NULL;
            $data['fb_price'] = NULL;
        }
        if($data['food'] == 'no'){
            $data['meal_type'] = NULL;

        }
        if(!in_array('parking', $data['amenities'])){
            $data['parking'] = NULL;
        }

        if ($request->filled(['room_type']))
        {
            $data['room_type'] = implode(',', $data['room_type']);
        }

        if ($request->filled(['amenities'])) 
        {
            $data['amenities'] = implode(', ', $data['amenities']);
        }

        $data['user_id'] = Auth()->user()->id;

        $user = properties::create($data);

        if($user){

            $mailData = [
                'title' => 'Mail from Paying Guest',
                'body' => 'Property added Successfully'
            ];
             
            Mail::to(Auth()->user()->email)->cc('happyagarwal918@gmail.com')->send(new DemoMail($mailData));
        }

        return back()->with('successful_message', 'Property created successfully');
    }

    public function editProperties($id)
    {
        $data = properties::where('id', $id)->first();
        $data['room_type'] = explode(", ", $data->room_type);
        $data['amenities'] = explode(", ", $data->amenities);
        
        return view('broker.editProperties', compact('data'));
    }

    public function propertyupdate(Request $request, $id)
    {
        $data = $request->except(['_token']);

        if(!in_array('single', $data['room_type'])){
            $data['sb_room_count'] = NULL;
            $data['sb_bathroom_count'] = NULL;
            $data['sb_room_size'] = NULL;
            $data['sb_category'] = NULL;
            $data['sb_furnished_type'] = NULL;
            $data['sb_price'] = NULL;
        }
        if(!in_array('double', $data['room_type'])){
            $data['db_room_count'] = NULL;
            $data['db_bathroom_count'] = NULL;
            $data['db_room_size'] = NULL;
            $data['db_category'] = NULL;
            $data['db_furnished_type'] = NULL;
            $data['db_price'] = NULL;
        }
        if(!in_array('triple', $data['room_type'])){
            $data['tb_room_count'] = NULL;
            $data['tb_bathroom_count'] = NULL;
            $data['tb_room_size'] = NULL;
            $data['tb_category'] = NULL;
            $data['tb_furnished_type'] = NULL;
            $data['tb_price'] = NULL;
        }
        if(!in_array('four', $data['room_type'])){
            $data['fb_room_count'] = NULL;
            $data['fb_bathroom_count'] = NULL;
            $data['fb_room_size'] = NULL;
            $data['fb_category'] = NULL;
            $data['fb_furnished_type'] = NULL;
            $data['fb_price'] = NULL;
        }
        if($data['food'] == 'no'){
            $data['meal_type'] = NULL;

        }
        if(!in_array('parking', $data['amenities'])){
            $data['parking'] = NULL;
        }

        if ($request->filled(['room_type'])) 
        {
            $data['room_type'] = implode(',', $data['room_type']);
        }

        if ($request->filled(['amenities']))
        {
            $data['amenities'] = implode(', ', $data['amenities']);
        }

        $data['user_id'] = Auth()->user()->id;

        $user = properties::create($data);

        return back()->with('successful_message', 'Property updated successfully');
    }
}
