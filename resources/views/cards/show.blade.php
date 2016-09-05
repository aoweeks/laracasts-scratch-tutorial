@extends('layout')

@section('content')
    <h1>{{ $card->title }}</h1>
    <h3>{{ $card->created_at }}</h3ex>
@stop