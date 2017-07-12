@extends('layouts.app')

@section('header')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Letters</div>

                    <div class="panel-body">
                            <form method="POST" action="/letters">
                                  {{ csrf_field() }} 
                                Letter:
                                <input type="text" name="body">
      
                                <input type="submit" value="Create">
                            </form> 
                            @if(count($errors))
                            <ul>
                                @foreach($errors->all() as $error)
                                
                                    <li>{{ $error }}</li>

                                @endforeach
                            </ul> 
                            @endif       
                    </div>
                    
                    @foreach ($letters as $letter)
                        <div class="panel-body">
                            <a href="/letters/{{ $letter->id }}">{{ $letter->name }}</a>
                            <a href="/letters/{{ $letter->id }}/delete" class="delete">Delete</a>
                            <a href="/letters/{{ $letter->id }}/edit" class="edit">Edit</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
