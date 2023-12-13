@extends('app')

@section('title', '建立選手表單')

@section('worlds_theme', '建立球員的表單')

@section('worlds_contents')
    {!! Form::open(['url' => 'players/store']) !!}
    @include('players.form', ['submitButtonText'=>"新增選手資料"])
    {!! Form::close() !!}
@endsection