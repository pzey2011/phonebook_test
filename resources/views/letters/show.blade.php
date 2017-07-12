@extends('layouts.app')


@section('header')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Contacts</div>

                    <a class="btn btn-primary" href="/letters/{{ $letter->id }}/contacts">Create A Contact </a>

                    <hr>
                    
	                    @foreach ($letter->contacts as $contact)
	                        <div class="panel-body">
	                            <a href="/letters/{{ $letter->id }}/contacts/{{ $contact->id }}/show" >{{ $contact->firstname }}  {{ $contact->lastname }}</a>
	                            <a href="/contacts/{{ $contact->id }}/delete" class="delete" >Delete</a>
                                <a href="/letters/{{ $letter->id }}/contacts/{{ $contact->id }}/edit" class="edit" >Edit</a>
	                        </div>
	                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection