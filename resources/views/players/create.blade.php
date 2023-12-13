@extends('app')

@section('title', '建立選手表單')

@section('world_theme', '建立選手的表單')

@section('world_contents')
    {!! Form::open(['url' => 'players/store']) !!}
    @include('players.form', ['submitButtonText'=>"新增選手資料"])
    {!! Form::close() !!}
@endsection