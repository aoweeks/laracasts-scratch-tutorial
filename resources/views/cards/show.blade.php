@extends('layout')

@section('content')

    <div class="row">
        
        <div class="col-md-6 col-md-offset-3">
            <h1>{{ $card->title }}</h1>
            <h3>{{ $card->created_at }}</h3>
            
            <ul class="list-group">
            @foreach ($card->notes as $note)
                
                <li class="list-group-item">{{ $note->body }}</li>
                
            @endforeach
            </ul>
            
            <h3>Add a New Note</h3>
        </div>
    </div>
@stop