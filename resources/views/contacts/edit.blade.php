@extends('layouts.app')

@section('header')
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            <form method="POST" action="/letters/{{	 $letter->id	}}/contacts/{{ $contact->id }}">
            {{  method_field('PATCH') }}
                  {{ csrf_field() }}
                <h3>Edit Contact:</h3>
                	<h5>First Name:</h5>
                    <input type="text" name="firstname" value="{{ $contact->firstname }}">
                    <h5>Last Name:</h5>
                    <input type="text" name="lastname" value="{{ $contact->lastname }}">
                    <h5>Phone:</h5>
                    <input type="text" name="phone" value="{{ $contact->phone }}">
                    <h5>Mobile:</h5>
                    <input type="text" name="mobile" value="{{ $contact->mobile }}">
                    <h5>Email:</h5>
                    <input type="text" name="email" value="{{ $contact->email }}">

                	<h5>Address</h5>
                	<div class='form-group'>
                		<textarea name="address" class="form-control">{{ $contact->address }}</textarea>
                	</div>
                	<h5>Bio</h5>
                	<div class='form-group'>
                		<textarea name="bio" class="form-control">{{ $contact->bio }}</textarea>
					</div>

					<div class='form-group'>
                		<button type="submit" class="btn btn-primary">Edit</button>
                	</div>


               
            </form> 
            @if(count($errors))
            <ul>
                @foreach($errors->all() as $error)
                
                    <li>{{ $error }}</li>

                @endforeach
            </ul>

            @endif        
        </div>
    </div>
</div>

@endsection