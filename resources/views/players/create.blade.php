@extends('app')

@section('title', '建立選手表單')

@section('lol_theme', '建立選手的表單')

@section('worlds_contents')
    @include('messages.list')
    {!! Form::open(['url' => 'players/store']) !!}
    @include('players.form', ['submitButtonText'=>"新增選手資料"])
    {!! Form::close() !!}
@endsection