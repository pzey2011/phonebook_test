@extends('layouts.app')

@section('header')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form method="POST" action="/letters/{{ $letter->id }}">
                {{  method_field('PATCH') }}
                   {{ csrf_field() }}
                <div class="form-group">
                     <input type="text" name="body" value="{{old('body')}}">
                </div>
                <div class="form-group">
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
