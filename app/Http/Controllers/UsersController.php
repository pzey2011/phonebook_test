<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profile()
    {
    	return view('user.profile', array('user' => Auth::user()));

    }
    public function update_profile(Request $request)
    {
    	if($request->hasFile('image'))
    	{
    		$image= $request->file('image');
    		$fileName=time() .  '.' . $image->getClientOriginalExtension();
    		Image::make($image)->resize(300, 300)->save(public_path(''. $fileName));
    		$user=Auth::user();
    		$user->image=$fileName;
    		$user->save();
    	}
    	return view('user.profile', array('user' => Auth::user()));

    }
}
