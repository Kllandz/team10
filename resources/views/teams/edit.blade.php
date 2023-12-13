@extends('app')

@section('title', '編輯特定隊伍')

@section('nba_theme', '編輯中的隊伍')

@section('nba_contents')
    {!! Form::model($team, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\TeamsController@update', $team->id]]) !!}
    @include('teams.form', ['submitButtonText'=>'更新隊伍資料'])
    {!! Form::close() !!}
@endsection