@extends('layouts.app')

@section('header')
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<img src="/{{ $user->image }}" class="contact-image">
        	<h2>{{ $user->name }}'s Profile</h2>
        	<form enctype="multipart/form-data" action="/profile" method="POST">
        		  {{ csrf_field() }}
        		<label>Update Profile Image</label>
        		<input type="file" name="image">
        		<input type="submit" class="pull-right btn btn-primary" value="Submit">
        	</form>
       </div>
    </div>
</div>
@endsection