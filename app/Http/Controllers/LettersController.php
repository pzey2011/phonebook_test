<?php

namespace App\Http\Controllers;
use App\Letter;
use Illuminate\Http\Request;
use DateTime;

class LettersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    	$letters=Letter::all();

        return view('letters.index', compact('letters'));

    }
    public function create(Request $request)
    {	
    	$this->validate($request,['body' => 'required']);
    	Letter::insert(['name' => $request->body, 'updated_at'=>new DateTime()]);


        return back();
    }
    public function edit(Letter $letter)
    {

    	return view('letters.edit', compact('letter'));

    }
    public function update(Request $request,Letter $letter)
    {
        $this->validate($request,['body' => 'required']);
    	
    	$letter->name=$request->body; #error fixed! update function didn't worked!
    	$letter->save();
    
    	return back();
    }
    public function show(Letter $letter)
    {
        return view('letters.show', compact('letter'));
    }
    public function destroy(Letter $letter)
    {
    	
    	$letter->contacts()->forceDelete();
    	
    	$letter->forceDelete();

    	

    	return back();
    }
}
