
@extends('app')

@section('title', '建立隊員表單')

@section('lol_theme', '建立隊員的表單')

@section('lol_contents')
    {!! Form::open(['url' => 'players/store']) !!}
    @include('players.form', ['submitButtonText'=>"新增隊員資料"])
    {!! Form::close() !!}
@endsection