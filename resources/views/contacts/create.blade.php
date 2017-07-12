@extends('layouts.app')

@section('header')
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            <form method="POST" action="/letters/{{	 $letter->id	}}/contacts/add">
                  {{ csrf_field() }}
                <h3>Add New Contact:</h3>
                	<h5>First Name:</h5>
                    <input type="text" name="firstname" value="{{ old('firstname') }}">
                    <h5>Last Name:</h5>
                    <input type="text" name="lastname" value="{{ old('lastname') }}">
                    <h5>Phone:</h5>
                    <input type="text" name="phone" value="{{ old('phone') }}">
                    <h5>Mobile:</h5>
                    <input type="text" name="mobile" value="{{ old('mobile') }}">
                    <h5>Email:</h5>
                    <input type="text" name="email" value="{{ old('email') }}">

                	<h5>Address</h5>
                	<div class='form-group'>
                		<textarea name="address" class="form-control">{{ old('address') }}</textarea>
                	</div>
                	<h5>Bio</h5>
                	<div class='form-group'>
                		<textarea name="bio" class="form-control">{{ old('bio') }}</textarea>
					</div>

					<div class='form-group'>
                		<button type="submit" class="btn btn-primary">Create</button>
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