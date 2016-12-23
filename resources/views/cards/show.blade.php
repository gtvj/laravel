@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-4">
            <h1>{{ $card->title }}</h1>
            <ul class="list-group">
                @foreach($card->notes as $note)
                    <li class="list-group-item">{{ $note->body }} <a href="#">{{ $note->user->username }}</a> <span
                                class="pull-right"><a
                                    href="/notes/{{$note->id}}/edit">Edit</a></span></li>
                @endforeach
            </ul>
            <h3>Add a new note</h3>
            <form action="/cards/{{$card->id}}/notes" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <textarea class="form-control" name="body">{{ old('body') }}</textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
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
@stop