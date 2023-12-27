@extends('app')

@section('title', '建立戰隊表單')

@section('lol_theme', '建立戰隊的表單')

@section('lol_contents')
    @include('message.list')    
    {!! Form::open(['url' => 'teams/store']) !!}
    @include('teams.form', ['submitButtonText'=>'新增戰隊資料'])
    {!! Form::close() !!}
@endsection