@extends('app')

@section('title', '編輯特定選手')

@section('worlds_theme', '編輯中的選手')

@section('worlds_contents')
    {!! Form::model($player, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\PlayersController@update', $player->id]]) !!}
    @include('players.form', ['submitButtonText'=>"更新選手資料"])
    {!! Form::close() !!}
@endsection