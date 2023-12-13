@extends('app')

@section('title', '編輯特定隊伍')

@section('lol_theme', '編輯中的隊伍')

@section('worlds_contents')
    {!! Form::model($team, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\TeamsController@update', $team->id]]) !!}
    @include('teams.form', ['submitButtonText'=>"更新隊伍資料"])
    {!! Form::close() !!}
@endsection