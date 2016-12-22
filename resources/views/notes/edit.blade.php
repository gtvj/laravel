@extends('layout')

@section('content')
    <h1>Edit the note</h1>
    <form method="post" action="/notes/{{$note->id}}">
        {{ method_field('PATCH') }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <textarea name="body" id="" class="form-control">{{ $note->body }}</textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Update note</button>
        </div>
    </form>
@stop