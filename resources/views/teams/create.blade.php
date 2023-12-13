@extends('app')

@section('title', '建立隊伍表單')

@section('nba_theme', '建立隊伍的表單')

@section('nba_contents')
    {!! Form::open(['url' => 'teams/store']) !!}
    @include('teams.form', ['submitButtonText'=>'新增隊伍資料'])
    {!! Form::close() !!}
@endsection