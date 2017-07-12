<?php

namespace App\Http\Controllers;
use App\Contact;
use App\Letter;
use DateTime;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create(Letter $letter,Contact $contact)
    {	

    	return view('contacts.create', compact('letter','contact'));
    }
    public function add(Request $request,Letter $letter,Contact $contact)
    {
        $this->validate($request,['firstname'=> 'required' , 'lastname' => 'required']);
    	$contact= new Contact;
    	$contact->firstname= $request->firstname;
    	$contact->lastname= $request->lastname;
    	$contact->phone=$request->phone;
    	$contact->mobile= $request->mobile;
    	$contact->email = $request->email;
    	$contact->address =$request->address;
    	$contact->bio = $request->bio; 
    	$letter->contacts()->save($contact);

    	return view('letters.show', compact('letter'));
    }
    public function edit(Letter $letter,Contact $contact)
    {

    	return view('contacts.edit', compact('letter','contact'));

    }
    public function update(Request $request,Letter $letter,Contact $contact)
    {
    	$this->validate($request,['firstname' => 'required' , 'lastname' => 'required']);
    	$contact->firstname= $request->firstname;
        $contact->lastname= $request->lastname;
        $contact->phone=$request->phone;
        $contact->mobile= $request->mobile;
        $contact->email = $request->email;
        $contact->address =$request->address;
        $contact->bio = $request->bio; 
        $letter->contacts()->save($contact);
    
    	return view('letters.show', compact('letter'));
    }
    public function show(Letter $letter,Contact $contact)
    {
        return view('contacts.show', compact('letter','contact'));
    }
    public function destroy(Contact $contact)
    {
    	
    	$contact->forceDelete();
    	

    	return back();
    }
}
