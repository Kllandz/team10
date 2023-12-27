@extends('app')

@section('title', '建立隊伍表單')

@section('lol_theme', '建立隊伍的表單')

@section('worlds_contents')
    @include('message.list')
    {!! Form::open(['url' => 'teams/store']) !!}
    @include('teams.form', ['submitButtonText'=>"新增隊伍資料"])
    {!! Form::close() !!}
@endsection
